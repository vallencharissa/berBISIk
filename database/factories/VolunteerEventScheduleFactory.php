<?php

namespace Database\Factories;

use App\Models\VolunteerEventSchedule;
use DateTime;
use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VolunteerEventSchedule>
 */
class VolunteerEventScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $faker = faker::create();

        $currentDate = new DateTime();
        $latestScheduleDate = VolunteerEventSchedule::max('date');

        if($latestScheduleDate == null) $date = $currentDate;
        else{
            $latestDatePlusOne = (new DateTime($latestScheduleDate))->modify('+1 day');
            $endDateInterval = $latestDatePlusOne->modify('+7 days');
            $date = $faker->dateTimeBetween($latestDatePlusOne, $endDateInterval);
        }

        $startHour = $faker->numberBetween(7, 17); 
        $timeStartString = sprintf('%02d:00:00', $startHour); 
        $endHour = $startHour + $faker->numberBetween(1, 4);
        $timeEndString = sprintf('%02d:00:00', $endHour); 

        return [
            'date' => $date,
            'time_start' =>$timeStartString,
            'time_end' =>$timeEndString
        ];
    }
}
