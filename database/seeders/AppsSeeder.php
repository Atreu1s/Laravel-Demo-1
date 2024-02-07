<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;

class AppsSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Application::create([
            'gosRegNumber' => 'A901AM',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi cum in nulla eligendi? Qui rerum fugit voluptate quaerat? Dolor sed animi ipsa soluta quia sequi maxime fuga, similique nam nihil?',
            'user_id' => 1,
            'status' => 1,
        ]);
    }
}
