<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\Backend\InstituteClassSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\Backend\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            InstituteClassSeeder::class,
        ]);
    }
}
