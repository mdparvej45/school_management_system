<?php

namespace Database\Seeders\Backend;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstituteClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('institute_classes')->insert([
            [
                'name' => json_encode([
                    'play' => 'Play',
                    'nursery' => 'Nursery',
                    'kg' => 'KG',
                    'one' => 'One',
                    'two' => 'Two',
                    'three' => 'Three',
                    'four' => 'Four',
                    'five' => 'Five',
                    'six' => 'Six',
                    'seven' => 'Seven',
                    'eight' => 'Eight',
                    'nine' => 'Nine',
                    'ten' => 'Ten',
                    'eleven' => 'Eleven',
                    'twelve' => 'Twelve',
                ]),
                'section' => json_encode([
                    'all' => 'All',
                    'a ' => 'A',
                    'b' => 'B',
                ]),
                'group' => json_encode([
                    'general' => 'General',
                    'accounting' => 'Accounting',
                    'science' => 'Science',
                    'humanities' => 'Humanities',
                    
                ]),
                'fee' => json_encode([
                    'play' => 500,
                    'nursery' => 600,
                    'kg' => 700,
                    'one' => 800,
                    'two' => 900,
                    'three' => 1000,
                    'four' => 1100,
                    'five' => 1200,
                    'six' => 1300,
                    'seven' => 1400,
                    'eight' => 1500,
                    'nine' => 1600,
                    'ten' => 1700,
                    'eleven' => 1800,
                    'twelve' => 1900,
                ]),
        
            ],
        ]);
    }
}
