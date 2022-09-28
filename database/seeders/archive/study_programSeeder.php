<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class study_programSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_program')->insert([
            'id' => 54321,
            'faculty_id' => 12345,
            'name' => "Teknik Komputer"
        ]);
        
        DB::table('study_program')->insert([
            'id' => 567 ,
            'faculty_id' => 432,
            'name' => "Teknik Informatika",
        ]);
    }
}
