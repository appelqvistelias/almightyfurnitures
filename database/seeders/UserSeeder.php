<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'user',
            'email' => 'user@almightyfurnitures.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@almightyfurnitures.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
    }
}
