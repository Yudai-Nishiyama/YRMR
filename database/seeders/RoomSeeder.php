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
        #only for test
        Room::create([
            'name' => '101',
            'image'=>'',
            'room_type_id' =>1,
            'is_active' =>1,
        ]);
        #only for test
        Room::create([
            'name' => '201',
            'image'=>'',
            'room_type_id' =>2,
            'is_active' =>1,
        ]);
        #only for test
        Room::create([
            'name' => '301',
            'image'=>'',
            'room_type_id' =>3,
            'is_active' =>1,
        ]);
    }
}
