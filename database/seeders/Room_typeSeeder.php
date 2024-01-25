<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Room_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomType::create([
            'room_type_name' => 'single bed',
            'description' => 'This room is New York style. There is a large living room and comfortable bedroom. You can spend your time stress-free.',
            'price' => 300,
        ]);

        RoomType::create([
            'room_type_name' => 'double bed',
            'description' => 'This room is New York style. There is a large living room and comfortable bedroom. You can spend your time stress-free.',
            'price' => 500,
        ]);
    }
}
