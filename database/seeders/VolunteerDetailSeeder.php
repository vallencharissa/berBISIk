<?php

namespace Database\Seeders;

use App\Models\VolunteerEvent;
use App\Models\VolunteerEventDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VolunteerDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VolunteerEventDetail::truncate();
        $volunteers = VolunteerEvent::get();

        foreach($volunteers as $volunteer){
            VolunteerEventDetail::factory()->create([
                'volunteer_event_id' => $volunteer->id
            ]);
        }

        
    }
}
