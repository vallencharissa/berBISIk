<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();

        $user_comments = [
            "Seru banget acaranya, beneran bantu banget buat belajar Bahasa Isyarat Indonesia!",
            "Tipsnya gampang dipahami banget, jadi bisa langsung praktek!",
            "Acaranya asik, beneran ngebantu banget buat yang baru mau belajar Bahasa Isyarat Indonesia.",
            "Cocok banget buat yang baru belajar, bahasanya ga bikin pusing!",
            "Keren banget! Bisa belajar Bahasa Isyarat Indonesia sambil ngobrol santai.",
            "Isinya padat banget, berguna banget buat yang mau jadi pengajar Bahasa Isyarat Indonesia.",
            "Bisa belajar Bahasa Isyarat Indonesia dari mana aja, gampang dan nyaman!",
            "Diskusinya seru banget, banyak yang bisa dipelajari dari pengalaman orang lain.",
            "Praktis banget buat yang ga punya banyak waktu, tapi pengen belajar Bahasa Isyarat Indonesia.",
            "Beneran deh, ga ribet buat belajar Bahasa Isyarat Indonesia dengan acara ini!"
        ];
        

        return [
            'rating' => $this->faker->randomFloat(1, 1, 5), 
            'comment' => $faker->randomElement($user_comments)
        ];
    }
}
