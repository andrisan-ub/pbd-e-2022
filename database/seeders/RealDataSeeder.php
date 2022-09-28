<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'id' => '1111',
            'student_id' => '205150701011024'
        ]);

        DB::table('student')->insert([
            'id' => '2222',
            'student_id' => '205150701011025'
        ]);

        DB::table('student')->insert([
            'id' => '3333',
            'student_id' => '205150701011026'
        ]);

        DB::table('student')->insert([
            'id' => '4444',
            'student_id' => '205150701011027'
        ]);
    }
}
