<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UsersEvent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsersEvent::truncate();

        $users = User::get();
        
        foreach ($users as $user) {             
            UsersEvent::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
