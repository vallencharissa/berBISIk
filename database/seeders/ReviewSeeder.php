<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::truncate();

        $users = User::with('users_events')->get();
        
        foreach ($users as $user){             
            if ($user->users_events->isNotEmpty()) {
                foreach ($user->users_events as $event) {
                    Review::factory()->create([
                        'event_id' => $event->event_id,
                        'user_id' => $user->id
                    ]);
                }
            }
        }
    }
}