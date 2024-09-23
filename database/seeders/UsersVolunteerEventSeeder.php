<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\UsersVolunteerEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersVolunteerEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsersVolunteerEvent::truncate();

        $users = User::get();
        
        foreach ($users as $user) {             
            UsersVolunteerEvent::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
