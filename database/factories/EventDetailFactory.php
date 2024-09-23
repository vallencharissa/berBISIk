<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventDetail>
 */
class EventDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();

        $sentences = [
            "Pengajaran Bahasa Isyarat Indonesia (BISINDO) membantu membangun komunikasi yang efektif antara tunarungu dan pendengar, memperkuat ikatan sosial dan budaya melalui penggunaan isyarat yang tepat dan alami dalam interaksi sehari-hari.",
            "Strategi pengajaran BISINDO yang efektif berfokus pada pendekatan inovatif dan interaktif, memungkinkan siswa untuk memahami dan menggunakan bahasa isyarat dengan percaya diri dalam berbagai situasi komunikasi.",
            "Pemahaman dasar BISINDO mencakup kosa kata utama, struktur kalimat, dan teknik-teknik isyarat yang diperlukan untuk berkomunikasi secara efektif dengan komunitas tunarungu di Indonesia.",
            "Mengajar BISINDO untuk pemula menekankan pada penggunaan metode sederhana dan praktis, membantu siswa dengan cepat menguasai dasar-dasar bahasa isyarat dan mengaplikasikannya dalam interaksi sehari-hari.",
            "Dengan Bahasa Isyarat Indonesia, inklusi menjadi lebih nyata, memungkinkan interaksi yang lebih baik antara tunarungu dan pendengar serta memperkaya pengalaman komunikasi dalam masyarakat yang beragam.",
            "Pengembangan materi BISINDO yang interaktif dan menarik memainkan peran penting dalam meningkatkan pemahaman dan penggunaan bahasa isyarat, membantu penyampaian informasi dengan cara yang menyenangkan dan mudah dipahami.",
            "Pelatihan guru bahasa isyarat melibatkan pendekatan komprehensif, mencakup berbagai teknik pengajaran dan metode adaptasi untuk memastikan pengajaran BISINDO yang efektif dan menyenangkan bagi siswa.",
            "Pembelajaran BISINDO secara online memberikan fleksibilitas dan aksesibilitas, memungkinkan siapa saja untuk belajar bahasa isyarat dengan bantuan modul interaktif dan sumber daya digital yang dapat diakses kapan saja.",
            "Diskusi komunitas BISINDO menawarkan platform untuk berbagi pengetahuan, pengalaman, dan tantangan dalam menggunakan bahasa isyarat, mendorong kolaborasi dan pemahaman yang lebih baik di antara anggotanya.",
            "Pembelajaran BISINDO yang sederhana dan praktis difokuskan pada penggunaan sehari-hari, membantu individu untuk dengan cepat menguasai bahasa isyarat dan menerapkannya dalam komunikasi yang bermakna dan efektif."
        ];

        $benefits = [
            "Membuka peluang komunikasi yang lebih luas antara tunarungu dan pendengar. Memperkuat hubungan sosial serta memungkinkan partisipasi aktif dalam berbagai kegiatan masyarakat. Inklusi sosial menjadi lebih nyata.",
            "Meningkatkan keterlibatan dan pemahaman siswa dalam menguasai bahasa isyarat dengan lebih cepat dan percaya diri. Metode inovatif membuat komunikasi menjadi lebih lancar dan bermakna dalam kehidupan sehari-hari.",
            "Memberikan kemampuan untuk berkomunikasi secara efektif dengan komunitas tunarungu. Meningkatkan kesadaran akan pentingnya inklusi dan memperkuat hubungan interpersonal. Keterampilan ini sangat berharga dalam berbagai aspek kehidupan.",
            "Memudahkan pemula untuk mulai berkomunikasi dengan bahasa isyarat. Pendekatan sederhana dan praktis memastikan pembelajaran yang cepat dan menyenangkan. Siswa dapat segera mengaplikasikan apa yang mereka pelajari dalam interaksi sehari-hari.",
            "Memungkinkan inklusi yang lebih baik dalam komunikasi sehari-hari. Memfasilitasi interaksi yang lebih berarti antara tunarungu dan pendengar, memperkaya pengalaman hidup semua pihak. Komunitas menjadi lebih terhubung.",
            "Membuat pembelajaran lebih menarik dan efektif melalui materi interaktif. Materi yang baik membantu siswa memahami dan menggunakan bahasa isyarat dengan lebih mudah. Meningkatkan motivasi belajar dan keterlibatan siswa.",
            "Menjamin keterampilan yang diperlukan untuk mengajar bahasa isyarat dengan efektif. Guru yang terlatih dapat menciptakan lingkungan belajar yang lebih inklusif dan suportif. Manfaat bagi siswa dan seluruh komunitas sekolah sangat besar.",
            "Menawarkan fleksibilitas yang besar bagi siapa saja yang ingin belajar bahasa isyarat secara online. Akses ke modul interaktif dan sumber daya digital memungkinkan pembelajaran yang lebih mandiri dan sesuai dengan jadwal masing-masing. Belajar menjadi lebih mudah dan terjangkau.",
            "Menyediakan platform untuk berbagi pengalaman dan strategi dalam penggunaan bahasa isyarat. Anggota komunitas merasa lebih didukung dan terhubung. Kolaborasi ini mendorong pertumbuhan dan pengembangan kemampuan bahasa isyarat yang lebih baik.",
            "Memudahkan siapa saja untuk memulai pembelajaran bahasa isyarat dengan cara yang sederhana dan praktis. Fokus pada penggunaan sehari-hari membuat bahasa isyarat lebih relevan dan mudah diingat. Komunikasi menjadi lebih efektif dan inklusif di berbagai situasi."
        ];

        return [
            'session' => $faker->numberBetween(5, 12),
            'seat' => $faker->numberBetween(10, 100),
            'short_description' => $faker->randomElement($sentences),
            'benefit' => $faker->randomElement($benefits),
            'whatsapp_link' => 'https://www.whatsapp.com/',
            'zoom_link' => 'https://zoom.us/'
        ];
    }
}
