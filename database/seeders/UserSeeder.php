<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        user::create([
            'username' => 'Admin',
            'name' => 'hasnan',
            'email' => 'hasnan@gmail.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);
    }
}
