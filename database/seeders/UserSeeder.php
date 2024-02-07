<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'firstname' => 'Иванов',
            'lastname' => 'Иван',
            'surname' => 'Иванович',
            'login' => 'ivan',
            'email' => 'ivan@pk-8.ru',
            'password' => Hash::make('ivan'),
            'role' => 2,
        ]);
    }
}
