<?php

namespace Database\Seeders;

use App\Models\Cleaning;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CleaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Cleaning::create([
            'user_id' =>2,
            'reservation_id'=>1,
        ]);

        Cleaning::create([
            'user_id' =>2,
            'reservation_id'=>2,
        ]);

    }
}
