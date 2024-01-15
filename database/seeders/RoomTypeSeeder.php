<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #only for test        
        RoomType::create([
            'room_type_name' => 'single bed',
            'description'=>'with one bed',
            'price' =>500,
        ]);
        #only for test
        RoomType::create([
            'room_type_name' => 'double bed',
            'description'=>'with 2 bed',
            'price' =>700,
        ]);
        #only for test
        RoomType::create([
            'room_type_name' => 'VIP',
            'description'=>'only for VIP member',
            'price' =>1000,
        ]);
    }
}
