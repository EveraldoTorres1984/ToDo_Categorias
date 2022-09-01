<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        //
        User::create([
            'name' => 'Everaldo Torres',
            'email' => 'veve@gmail.com',
            'password' => Hash::make('123')
        ]);
    }
}
