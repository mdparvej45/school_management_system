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
                'unique_id' => 'SUPA' . random_int(1000000, 9999999),
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
                'unique_id' => 'PRIN' . random_int(1000000, 9999999),
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
                'unique_id' => 'TECH' . random_int(1000000, 9999999),
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
                'unique_id' => 'ACCT' . random_int(1000000, 9999999),
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
                'unique_id' => 'OPER' . random_int(1000000, 9999999),
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
                'unique_id' => 'STUD' . random_int(1000000, 9999999),
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
