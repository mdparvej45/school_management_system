<?php

namespace Database\Seeders\Backend;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role' => 'principle',
                'name' => 'Principle',
                'email' => 'principle@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'teacher',
                'name' => 'Teacher',
                'email' => 'teacher@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'operator',
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'student',
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
      
        ]);
    }
}