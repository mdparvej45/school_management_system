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
                'role' => 'Superadmin',
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'mobile' => '01885518864',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Principle',
                'name' => 'Principle',
                'email' => 'principle@gmail.com',
                'email_verified_at' => now(),
                'mobile' => '01885518864',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Teacher',
                'name' => 'Teacher',
                'email' => 'teacher@gmail.com',
                'email_verified_at' => now(),
                'mobile' => '01885518864',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Accountant',
                'name' => 'Accountant',
                'email' => 'accountant@gmail.com',
                'email_verified_at' => now(),
                'mobile' => '01885518864',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Operator',
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'email_verified_at' => now(),
                'mobile' => '01885518864',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Student',
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'email_verified_at' => now(),
                'mobile' => '01885518864',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
      
        ]);
    }
}
