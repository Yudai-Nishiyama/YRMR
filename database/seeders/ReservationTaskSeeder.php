<?php

namespace Database\Seeders;

use App\Models\ReservationTask;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservationTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #room 1 complete
        ReservationTask::create([
            'reservation_id' => '1',
            'task_id' => '1',
        ]);

        ReservationTask::create([
            'reservation_id' => '1',
            'task_id' => '2',
        ]);

        ReservationTask::create([
            'reservation_id' => '1',
            'task_id' => '3',
        ]);

        #room2 60%
        ReservationTask::create([
            'reservation_id' => '2',
            'task_id' => '1',
        ]);

        ReservationTask::create([
            'reservation_id' => '2',
            'task_id' => '2',
        ]);
    }
}
