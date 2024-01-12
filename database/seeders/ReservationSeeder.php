<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #only for test
        Reservation::create([
            'user_id' =>3,
            'room_id'=>1,
            'reservation_number'=>'1234567890',
            'check_in' => '2024-01-05 13:54:46.000000',
            'check_out' => '2024-01-05 13:54:46.000000',
            'guest_checkin' =>1,
            'guest_checkout' =>1,
        ]);
        #only for test
        Reservation::create([
            'user_id' =>3,
            'room_id'=>2,
            'reservation_number'=>'1234567890',
            'check_in' => '2024-01-05 13:54:46.000000',
            'check_out' => '2024-01-05 13:54:46.000000',
            'guest_checkin' =>1,
            'guest_checkout' =>1,
        ]);
        #only for test
        Reservation::create([
            'user_id' =>3,
            'room_id'=>3,
            'reservation_number'=>'1234567890',
            'check_in' => '2024-01-05 13:54:46.000000',
            'check_out' => '2024-01-05 13:54:46.000000',
            'guest_checkin' =>1,
            'guest_checkout' =>1,
        ]);
    }
}
