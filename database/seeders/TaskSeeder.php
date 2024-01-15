<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                #only for test
                Task::create([
                    'name' => 'chaning sheet',
                ]);

                Task::create([
                    'name' => 'refil amenities',
                ]);

                Task::create([
                    'name' => 'cleaning the floor',
                ]);
    }
}
