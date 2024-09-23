<?php

namespace App\Console\Commands;

use App\Models\Event;
use App\Models\EventSchedule;
use App\Models\UsersEvent;
use App\Models\UsersVolunteerEvent;
use App\Models\VolunteerEventSchedule;
// use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class UpdateSessionDone extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:session_done';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update session_done for past events';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // event 
        $currentDate = Carbon::now();
        // $currentTime = $currentDate->format('H:i:s');

        $eventSchedules = EventSchedule::where('date', '<', $currentDate)
        // ->orWhere(function($query) use ($currentDate){
        //     $query->where('date', '=', $currentDate)->where('time_end', '<', $currentDate->toTimeString());
        // })
        ->where('status_id', 1)
        // ->where('time_end', '<', $currentDate)
        ->get();
        
        foreach ($eventSchedules as $schedule) {
            UsersEvent::where('event_id', $schedule->event_id)->increment('session_done');
            EventSchedule::where('event_id', $schedule->event_id)->where('date', '<=', $currentDate)->update(['status_id' => 2]);
        }


        // volunteer event 
        $volunteerEventSchedule = VolunteerEventSchedule::where('date', '<', $currentDate)
                                                        // ->where('time_end', '<', $currentDate)
                                                        ->where('status_id', 1)
                                                        ->get();
        
        foreach($volunteerEventSchedule as $schedules){
            VolunteerEventSchedule::where('volunteer_event_id', $schedules->volunteer_event_id)->update(['status_id' => 2]);
        }

        $this->info('Session done updated succesfully');
        return Command::SUCCESS;
    }
}
