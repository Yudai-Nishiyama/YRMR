<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CleanerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Cleaner1',
            'email' => 'cleaner1@email.com', 
            'password' => Hash::make('cleaner1234'),
            'role_id' => 3, 
        ]);
    }
}
