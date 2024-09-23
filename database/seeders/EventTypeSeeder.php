<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventTypeSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        EventType::truncate();
        Schema::enableForeignKeyConstraints();

        $eventTypes = [
            ['name' => 'Kelas'],
            ['name' => 'Seminar'],
            ['name' => 'Webinar']
        ];

        foreach ($eventTypes as $eventType) {
            EventType::insert([
                'name' => $eventType['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
