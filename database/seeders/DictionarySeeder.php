<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Dictionary;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dictionary::truncate();

        $alphabets = [];
        for ($i = 65; $i <= 90; $i++) {
            $letter = chr($i); // Mengonversi kode ASCII menjadi huruf
            $alphabets[] = ['word' => $letter, 'picture' => $letter . '.png'];
        }

        $wordsSample = ['Halo', 'Selamat', 'Hari', 'Semua', 'Aku', 'TemanTeman', 'BahasaIsyarat', 'Orang', 'Indonesia', 'Untuk', 
        'Disabilitas', 'Tema', 'Internasional', 'Tahun', 'Tuli', 'Mengucapkan', 'TepukTangan', 'Perempuan', 'Januari', 'Februari',
        'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'Senin',
        'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

        $words = [];
        foreach($wordsSample as $word){
            $words[] = ['word' => $word, 'picture' => $word . '.png'];
        }

        $merges = array_merge($alphabets, $words);

        foreach ($merges as $merge){
            Dictionary::insert([
                'word' => $merge['word'],
                'picture' => $merge['picture'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
