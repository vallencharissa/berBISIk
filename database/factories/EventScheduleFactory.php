<?php

namespace Database\Factories;

use DateTime;
use Faker\Factory as faker;
use App\Models\EventSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventSchedule>
 */
class EventScheduleFactory extends Factory
{
    

    public function definition()
    {

        $faker = faker::create();
        $currentDate = new DateTime();

        $latestEventScheduleDate = EventSchedule::max('date');

        if ($latestEventScheduleDate == null) {
            $date = $currentDate;
        } else {
            $latestDatePlusOne = (new DateTime($latestEventScheduleDate))->modify('+1 day');
            $endDateInterval = $latestDatePlusOne->modify('+7 days');
            $date = $faker->dateTimeBetween($latestDatePlusOne, $endDateInterval);
        }

        $startHour = $faker->numberBetween(7, 17); 
        $timeStartString = sprintf('%02d:00:00', $startHour); 
        $endHour = $startHour + $faker->numberBetween(1, 4);
        $timeEndString = sprintf('%02d:00:00', $endHour); 

        $descriptions = [
            "Mempelajari kosa kata dan struktur kalimat dalam Bahasa Isyarat Indonesia, memahami konteks budaya, menguji pemahaman melalui latihan praktis, dan eksplorasi variasi regional dalam komunikasi.",
            "Memahami norma dan etika dalam penggunaan Bahasa Isyarat Indonesia, menguji pemahaman dengan permainan peran, diskusi, dan pengenalan terhadap teknik interpretasi dan penerjemahan bahasa isyarat.",
            "Mempelajari tata bahasa dan frasa umum dalam Bahasa Isyarat Indonesia, memahami keberagaman budaya, menguji kemampuan dengan simulasi, dan mengeksplorasi variasi dialek dalam komunikasi.",
            "Pengajaran kosa kata dan struktur bahasa isyarat, pemahaman atas konteks sosial, pengujian melalui simulasi dan diskusi, serta penerapan teknik interpretasi dalam berbagai situasi.",
            "Mempelajari dasar-dasar Bahasa Isyarat Indonesia dan norma-norma budaya yang terkait, menguji pemahaman melalui latihan praktis dan simulasi, serta eksplorasi variasi dialek regional.",
            "Memahami makna dan penggunaan kosa kata Bahasa Isyarat Indonesia, menguji pemahaman dengan peran bermain, diskusi kelompok, dan latihan praktis, serta eksplorasi variasi dialek regional.",
            "Mempelajari tata bahasa Bahasa Isyarat Indonesia dan norma-norma sosial yang terkait, menguji pemahaman dengan simulasi interaktif, diskusi mendalam, dan pengenalan terhadap teknik interpretasi bahasa isyarat.",
            "Pengajaran kosa kata dan frasa umum dalam Bahasa Isyarat Indonesia, memahami keberagaman budaya dan konteks penggunaan, menguji kemampuan dengan latihan peran, simulasi situasional, dan analisis teks, serta eksplorasi variasi dialek dan ekspresi regional.",
            "Memahami konsep tata bahasa Bahasa Isyarat Indonesia, menguji pemahaman melalui permainan peran, diskusi kelompok, dan latihan praktis dalam situasi sehari-hari, serta eksplorasi variasi regional dalam komunikasi.",
            "Mempelajari kosa kata dan struktur kalimat dalam Bahasa Isyarat Indonesia, memahami konteks sosial dan budaya, menguji pemahaman dengan permainan peran, simulasi situasional, dan diskusi kelompok, serta eksplorasi variasi dialek dan kosakata regional."
        ];

        return [
            'description' => $faker->randomElement($descriptions),
            'date' => $date,
            'time_start' => $timeStartString,
            'time_end' => $timeEndString
        ];
    }
}
