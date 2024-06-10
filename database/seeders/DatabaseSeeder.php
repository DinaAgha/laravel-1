<?php

namespace Database\Seeders;
use\App\Models\Student;
use App\Models\City;
use App\Models\User;
use App\Models\Client;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(20)->create();
        City::factory(20)->create();
        Client::factory(20)->create();
        Student::factory(20)->create();
        
    }
}
