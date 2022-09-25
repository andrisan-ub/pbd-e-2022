<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseStudent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('student')->insert([
            'id' => '205150701011024',
            'student_id' => 'Ikhwan'
        ]);

        DB::table('student')->insert([
            'id' => '205150701011025',
            'student_id' => 'Fauzi'
        ]);

        DB::table('student')->insert([
            'id' => '205150701011026',
            'student_id' => 'Mif'
        ]);

        DB::table('student')->insert([
            'id' => '205150701011027',
            'student_id' => 'Faris'
        ]);
    }
}
