<?php

namespace Database\Seeders;

use App\Models\VolunteerEvent;
use App\Models\VolunteerEventSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VolunteerEventScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VolunteerEventSchedule::truncate();
        $volunteers = VolunteerEvent::with('volunteer_event_details')->get();

        foreach($volunteers as $volunteer){
            VolunteerEventSchedule::factory()->create([
                'volunteer_event_id' => $volunteer->id,
                'name' => 'Hari-H',
                'status_id' => 1
            ]);
        }
    }
}
