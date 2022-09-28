<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            'id' => '215150700111006',
            'student_id' => 'Mei'
        ]);

        DB::table('student')->insert([
            'id' => '215150701111023',
            'student_id' => 'Loey'
        ]);
    }
}
