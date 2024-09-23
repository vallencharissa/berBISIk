<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
        $admins = ['Ellena', 'Jesselyn', 'Lysan', 'Jessy', 'Valen'];
        // $emails = ['ellena@gmail.com', 'jesselyn@gmail.com', 'lysan@gmail.com', 'jessy@gmail.com', 'vallen@gmail.com'];
        foreach ($admins as $index => $admin) {
            User::insert([
                'role_id' => '2',
                'name' => $admin, 
                'email' => $admin . '@gmail.com',
                // 'password' => '123',
                'password' => Hash::make('123'), 
                'phone' => '123',
                'photo' => 'Sample1.png',
                'email_verified_at' => Carbon::now(),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        User::factory()->count(10)->create();
    }
}
