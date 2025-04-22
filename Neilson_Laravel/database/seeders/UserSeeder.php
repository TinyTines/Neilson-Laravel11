<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Neilson',
            'email' => 'Neilson@gmail.com',
            'password' => Hash::make('122112'),
        ]);
    }
}