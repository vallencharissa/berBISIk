<?php

namespace Database\Factories;

use App\Models\VolunteerEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersVolunteerEvent>
 */
class UsersVolunteerEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $volunteerEvents = VolunteerEvent::get();
        $randomEvent = $volunteerEvents->random();

        return [
            'volunteer_event_id' => $randomEvent->id,
        ];
    }
}
