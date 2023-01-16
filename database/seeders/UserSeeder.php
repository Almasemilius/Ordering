<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'business',
            'email' => 'business@test.com',
            'role' => 'business',
            'phone_number' => '0712345678',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'customer',
            'email' => 'customer@test.com',
            'role' => 'customer',
            'phone_number' => '0712345678',
            'password' => Hash::make('password')
        ]);
    }
}
