<?php

namespace Database\Factories;

use App\Models\Event;
use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersEvent>
 */
class UsersEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $faker = faker::create();
        $events = Event::with('event_details')->get();
        $randomEvent = $events->random();
        $session = $randomEvent->event_details->session;
        // $randomSession = $faker->numberBetween(0, $session);

        return [
            'event_id' => $randomEvent->id /**,
            'session_done'=> $randomSession */
        ];
    }
}
