<?php

namespace Database\Seeders;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Status::truncate();
        Schema::enableForeignKeyConstraints();

        $roles = ['Aktif', 'Tidak Aktif'];
        foreach ($roles as $index => $role) {
        Status::insert([
            'id' => $index + 1,
            'name' => $role, // Use the role directly from the array
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        }
    }
}
