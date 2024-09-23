<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VolunteerEventDetail>
 */
class VolunteerEventDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $faker = faker::create();

        $criteria = [
            "Kemampuan bahasa isyarat yang lancar sangat penting. Memastikan peserta acara dapat terlibat sepenuhnya. Penerjemahan yang akurat diperlukan untuk kesuksesan komunikasi dalam acara.",
            "Komitmen untuk dukung acara sangat dihargai. Siap hadir dan membantu dengan sepenuh hati. Kerjasama tim akan memastikan kelancaran acara.",
            "Kesiapan untuk berkontribusi secara penuh sangat diharapkan. Relawan harus siap memberikan dedikasi waktu dan tenaga. Memastikan suksesnya semua aspek acara.",
            "Memahami bahasa isyarat dan budaya sangat penting. Memastikan keterlibatan yang maksimal dari peserta. Mampu bekerja secara efektif dalam situasi yang beragam.",
            "Kemampuan berkomunikasi dengan baik sangat diutamakan. Mampu menyampaikan informasi secara jelas dan terstruktur. Keterampilan interpretasi yang handal akan memastikan kelancaran dialog dalam acara."
        ];
        
        $benefits = [
            "Pengalaman berharga mengorganisir acara dan memperluas jaringan. Kontribusi positif dalam inklusi komunitas tunarungu.",
            "Kesempatan untuk belajar dan bertumbuh dalam lingkungan kolaboratif. Dapat meningkatkan keterampilan organisasi dan komunikasi.",
            "Menyumbangkan waktu dan bakat untuk tujuan yang baik. Menghadiri acara yang inspiratif dan memperluas pemahaman tentang inklusi.",
            "Membangun hubungan yang berarti dengan sesama panitia dan peserta acara. Memberikan dampak positif pada kesuksesan dan inklusi acara.",
            "Pengalaman yang memuaskan dalam memainkan peran penting dalam acara yang berarti. Membantu menciptakan lingkungan yang ramah dan inklusif."
        ];
        
        $short_descriptions = [
            "Bergabunglah dalam tim panitia untuk pengalaman tak terlupakan. Jadilah bagian dari penyelenggaraan acara yang inklusif dan bermanfaat bagi komunitas tunarungu.",
            "Dapatkan kesempatan langka untuk belajar dan berkembang bersama tim panitia. Bangun jembatan komunikasi yang inklusif dan mendukung dalam acara kami.",
            "Mulailah perjalanan Anda sebagai relawan acara dan terjemahan profesional. Sumbangkan bakat Anda untuk membantu penyelenggaraan acara yang berarti.",
            "Jadilah relawan acara dan jembatani kesenjangan komunikasi. Dapatkan pengalaman berharga sambil memberikan kontribusi pada keberhasilan acara.",
            "Sambut kesempatan menjadi bagian dari tim panitia dan tim terjemahan kami. Dukung kesuksesan acara yang inklusif dan berdampak positif bagi komunitas."
        ];
        

        return [
            'criteria' =>$faker->randomElement($criteria),
            'benefit' =>$faker->randomElement($criteria),
            'short_description' =>$faker->randomElement($short_descriptions),
            'seat' =>$faker->numberBetween(1,40),
            'whatsapp_link' => 'https://www.whatsapp.com/',
            'zoom_link' => 'https://zoom.us/'
        ];
    }
}
