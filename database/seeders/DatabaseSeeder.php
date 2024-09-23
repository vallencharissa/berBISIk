<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EventDetail;
use App\Models\EventSchedule;
use App\Models\UsersEvent;
use App\Models\UsersVolunteerEvent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            DictionarySeeder::class,
            StatusSeeder::class,
            InstructorSeeder::class,
            EventTypeSeeder::class,
            EventSeeder::class,
            EventDetailSeeder::class,
            EventScheduleSeeder::class,
            EventScheduleSeeder::class,
            VolunteerEventSeeder::class,
            VolunteerDetailSeeder::class,
            VolunteerEventScheduleSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            UsersEventSeeder::class,
            UsersVolunteerEventSeeder::class,
            ReviewSeeder::class
        ]);
    }
}
