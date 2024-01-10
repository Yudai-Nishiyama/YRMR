<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            'name' => 'Room1',
            'image' => 'room1.png',
            'room_type_id' => 1,
            'is_active' => 1,

        ]);

        Room::create([
            'name' => 'Room2',
            'image' => 'room1.png',
            'room_type_id' => 1,
            'is_active' => 1,

        ]);
    }
}
