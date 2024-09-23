<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InstructorFactory extends Factory
{

    public function definition()
    {
        $faker = faker::create();

        $job_titles = [
            'Terjemah Bahasa Isyarat',
            'Guru Bahasa Isyarat',
            'Penerjemah Tuna Rungu',
            'Asisten Komunikasi Bahasa Isyarat',
            'Pelatih Komunikasi Tuna Rungu',
            'Konselor Bahasa Isyarat',
            'Interpreter Bahasa Isyarat',
            'Koordinator Komunikasi Tuna Rungu',
            'Pengajar Bahasa Isyarat',
            'Komunikator Tuna Rungu'
        ];

        $photo = [
            'Sample1.png',
            'Sample2.png',
            'Sample3.png',
            'Sample4.png',
            'Sample5.png',
            'Sample6.png',
            'Sample7.png',
            'Sample8.png',
            'Sample9.png',
        ];
        
        $descriptions = [
            "Seorang profesional dengan latar belakang S1 komunikasi yang mendalami keterampilan berkomunikasi dengan tunarungu, menggunakan metode interaktif dan inovatif untuk meningkatkan pemahaman dan keterlibatan dalam berbagai konteks.",
            "Seorang sarjana psikologi dengan keahlian dalam Bahasa Isyarat Indonesia, berfokus pada pengajaran dan pelatihan individu untuk berkomunikasi lebih efektif dengan komunitas tunarungu, menggunakan teknik yang mudah dipahami.",
            "Seorang ahli bahasa dengan pengalaman luas dalam membantu tunarungu berkomunikasi secara lebih inklusif dan efisien. Menggunakan pendekatan adaptif untuk memastikan setiap pesan tersampaikan dengan jelas.",
            "Seorang profesional berpengalaman dalam membantu orang lain memahami dan menggunakan bahasa isyarat dalam kehidupan sehari-hari. Mengajarkan keterampilan praktis yang memungkinkan komunikasi yang lebih baik antara tunarungu dan pendengar.",
            "Seorang pelatih berpengalaman yang berfokus pada pengembangan keterampilan komunikasi bagi tunarungu, membantu mereka mengatasi tantangan sehari-hari melalui penggunaan metode dan teknik yang terbukti efektif.",
            "Seorang konselor dengan spesialisasi dalam bahasa isyarat, memberikan bimbingan dan dukungan kepada individu dan keluarga untuk meningkatkan komunikasi dan hubungan interpersonal di dalam komunitas tunarungu.",
            "Seorang interpreter profesional yang fasih dalam Bahasa Isyarat Indonesia, membantu dalam berbagai situasi untuk memastikan komunikasi yang jelas dan efektif antara tunarungu dan pendengar, baik dalam lingkungan formal maupun informal.",
            "Seorang koordinator berpengalaman yang memfasilitasi komunikasi antara tunarungu dan pendengar. Menggunakan pendekatan strategis untuk memastikan informasi disampaikan dengan tepat dan dapat dipahami oleh semua pihak.",
            "Seorang pengajar berdedikasi yang memiliki pengetahuan mendalam tentang bahasa isyarat, membantu siswa dari berbagai latar belakang untuk belajar dan menguasai keterampilan komunikasi yang diperlukan dalam kehidupan sehari-hari.",
            "Seorang komunikator profesional yang bekerja dengan tunarungu untuk memperkuat kemampuan komunikasi mereka. Menggunakan berbagai alat dan teknik untuk memastikan setiap individu dapat berkomunikasi dengan percaya diri dan efektif."
        ];
        

        return [
            'name' => $faker->name(),
            'description' => $faker->randomElement($descriptions),
            'job' => $faker->randomElement($job_titles),
            'photo' => $faker->randomElement($photo)
        ];
    }
}
