<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventDetail::truncate();
        $events = Event::with('event_types')->get();
        
        foreach ($events as $event){
            if($event->event_types->name == 'Kelas')
            {
                
                EventDetail::factory()->create([
                    'event_id' => $event->id
                ]);
            }
            else{
                EventDetail::factory()->create([
                    'event_id' => $event->id,
                    'session' => 1
                ]);
            }

            
        }
    
    }
}
