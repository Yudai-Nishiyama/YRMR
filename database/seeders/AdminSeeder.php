<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin1234'),
            'role_id' => User::ADMIN_ROLE_ID,
        ]);

        #only for test
        User::create([
            'username' => 'cleaner1',
            'email' => 'cleaner1@email.com',
            'password' => Hash::make('cleaner12345'),
            'role_id' => User::CLEANER_ROLE_ID,
        ]);

         #only for test
        User::create([
            'username' => 'user1',
            'email' => 'user1@email.com',
            'password' => Hash::make('user12345'),
            'role_id' => User::USER_ROLE_ID,
        ]);

    }
}
