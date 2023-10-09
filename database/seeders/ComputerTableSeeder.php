<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Computer;
use Database\Factories\ComputerFactory;

class ComputerTableSeeder extends Seeder
{
    public function run()
    {
        Computer::factory()->count(100)->create();
    }
}