<?php

namespace Database\Seeders;

use App\Models\VolunteerEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VolunteerEventEvent;
use Illuminate\Support\Facades\Schema;

class VolunteerEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        VolunteerEvent::truncate();
        Schema::enableForeignKeyConstraints();

        // VolunteerEvent::factory()->count(20)->create([
        //     'status_id' => 1
        // ]);

        // VolunteerEvent::factory()->count(10)->create([
        //     'status_id' => 2
        // ]);

        VolunteerEvent::factory()->count(10)->create();
    }
}
