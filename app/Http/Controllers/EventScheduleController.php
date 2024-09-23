<?php

namespace App\Http\Controllers;

use App\Http\Requests\tambahAcaraRequest;
use App\Http\Requests\tambahJadwalAcaraRequest;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\EventDetail;
use DateTime;
use Illuminate\Http\Request;
use App\Models\EventSchedule;

class EventScheduleController extends Controller
{
    public function create()
    {
        return view('tambahJadwalAcara');
    }

    // ga bisa pake tambahAcaraRequest kalo ga dia bakal null
    public function store(tambahJadwalAcaraRequest $request)
    {
        // dd($request->input('name' . 1));

        $eventData = session()->get('event_data');
        $fileName = session()->get('photo_file_name');

        $event = new Event;
        $event->event_type_id = $eventData['event_type_id']; 
        $event->instructor_id = $eventData['instructor_id'];
        $event->title = $eventData['title'];
        $event->price = $eventData['price'];
        $event->location = $eventData['location'];
        $event->photo = $fileName;
        $event->save(); 

        $eventDetail = new EventDetail;
        $eventDetail->event_id = $event->id;
        $eventDetail->session = $eventData['session'];
        $eventDetail->seat = $eventData['seat'];
        $eventDetail->short_description = $eventData['short_description'];
        $eventDetail->benefit = $eventData['benefit'];
        $eventDetail->whatsapp_link = $eventData['whatsapp_link'];
        $eventDetail->zoom_link = $eventData['zoom_link'];
        $eventDetail->save();
        
        for ($i = 1; $i <= $eventDetail->session; $i++) {
            $eventSchedule = new EventSchedule;
            $eventSchedule->event_id = $event->id;
            $eventSchedule->status_id = 1;
            $eventSchedule->name = $request->input('name'.$i);
            $eventSchedule->description = $request->input('description'.$i);
            $eventSchedule->date = $request->input('date'.$i);
            $eventSchedule->time_start = $request->input('time_start'.$i);
            $eventSchedule->time_end =$request->input('time_end'.$i);
            $eventSchedule->save();
        }

        session()->forget('event_data');
        return redirect('/acara');
        
    }

    public function edit($id)
    {
        // $id = session()->get('event_id');
        // $eventData = session()->get('event_data');
        $event = Event::findOrFail($id);
        $eventSchedule = $event->event_schedules;
        $eventSession = $event->event_details->session;

        return view('/ubahJadwalAcara', ['id' => $id,'jumlahSesiLama' => $eventSession, 'daftarJadwalAcara' => $eventSchedule]);
        // return view('/ubahJadwalAcara');
    }

    public function update(tambahJadwalAcaraRequest $request, $id)
    {
        // $id = session()->get('event_id');
        
        $eventData = session()->get('event_data');
        $photoFileName = session()->get('photo_file_name');
        
        $event = Event::findOrFail($id);
        $event->event_type_id = $eventData['event_type_id']; 
        $event->instructor_id = $eventData['instructor_id'];
        $event->title = $eventData['title'];
        $event->price = $eventData['price'];
        $event->location = $eventData['location'];
        if($photoFileName != 'null')
        {
            $event->photo = $photoFileName; 
        }
        $event->save();

        $eventSessionOld = $event->event_details->session;
        // $eventDetailsId = $event->event_details->$id;

        $eventDetail = EventDetail::where('event_id', $id)->firstOrFail();
        // dd($id);
        $eventDetail->session= $eventData['session'];
        $eventDetail->seat= $eventData['seat'];
        $eventDetail->short_description= $eventData['short_description'];
        $eventDetail->benefit= $eventData['benefit'];
        $eventDetail->whatsapp_link= $eventData['whatsapp_link'];
        $eventDetail->zoom_link= $eventData['zoom_link'];
        $eventDetail->save();

        for ($i = 0; $i < $eventData['session']; $i++) {
            if ($i < $eventSessionOld) {
                $eventSchedule = $event->event_schedules[$i];
            } else {
                $eventSchedule = new EventSchedule();
                $eventSchedule->event_id = $id;
            }
            $eventSchedule->status_id = 1;
            $eventSchedule->name = $request->input('name'.$i);
            $eventSchedule->description = $request->input('description'.$i);
            $eventSchedule->date = $request->input('date'.$i);
            $eventSchedule->time_start = $request->input('time_start'.$i);
            $eventSchedule->time_end =$request->input('time_end'.$i);
            $eventSchedule->save();
        }
        
        // dd($event->event_schedules);

        // If the new quantity is less than the old quantity, delete extra event schedules
        if ($eventSessionOld > $eventData['session']) {
            $event->event_schedules->splice($eventData['session'])->each(function ($schedule) {
                $schedule->delete();
            });
        }
    
        $event->save();

        return redirect('/acara');
    }

 
}
