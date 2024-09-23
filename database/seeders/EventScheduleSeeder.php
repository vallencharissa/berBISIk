<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventSchedule;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Database\Factories\EventScheduleFactory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventSchedule::truncate();
        $events = Event::with('event_types', 'event_details')->get();
        
        foreach ($events as $event){
            if($event->event_types->name == 'Kelas')
            {
                for($i=1;$i<=$event->event_details->session;$i++){
                    EventSchedule::factory()->create([
                        'event_id' => $event->id,
                        'name' => 'Kelas ' . $i,
                        'status_id' => 1
                    ]);
                }
                
            }
            else{
                EventSchedule::factory()->create([
                    'event_id' => $event->id,
                    'name' => 'Hari-H',
                    'status_id' => 1
                ]);
            }

            
        }
    }
}
