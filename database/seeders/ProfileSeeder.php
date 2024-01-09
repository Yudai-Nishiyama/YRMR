<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'user_id' => 2,
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'phone_number' => '000-1234-5678',
            'address' => '123 Main St, Anytown, AT 12345',
        ]);
    }
}
