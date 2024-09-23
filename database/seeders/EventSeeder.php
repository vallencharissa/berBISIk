<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Instructor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Event::truncate();
        Schema::enableForeignKeyConstraints();
        Event::factory()->count(20)->create();
    }
}
