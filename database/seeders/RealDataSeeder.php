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
        DB::table('syllabus')->insert([
            'course_id' => '01',
            'name' => 'Konsep Pemrograman Basis Data dan Rencana Projek Akhir Kelompok',
            'author' => 'Issa Arwani, S.Kom, M.Sc',
            'head_of_study_program' => 'Widhy Hayuhardhika N.P,S.Kom., M.Kom.'
        ]);

        DB::table('syllabus')->insert([
            'course_id' => '02',
            'name' => 'Logika Pemrograman Basis Data dan Progres Projek Tengah Kelompok',
            'author' => 'Issa Arwani, S.Kom, M.Sc',
            'head_of_study_program' => 'Widhy Hayuhardhika N.P,S.Kom., M.Kom.'
        ]);

        DB::table('syllabus')->insert([
            'course_id' => '03',
            'name' => 'Cursor, Function dan Trigger',
            'author' => 'Issa Arwani, S.Kom, M.Sc',
            'head_of_study_program' => 'Widhy Hayuhardhika N.P,S.Kom., M.Kom.'
        ]);

        DB::table('syllabus')->insert([
            'course_id' => '04',
            'name' => 'Dynamic SQL dan Smart Codeigniter',
            'author' => 'Issa Arwani, S.Kom, M.Sc',
            'head_of_study_program' => 'Widhy Hayuhardhika N.P,S.Kom., M.Kom.'
        ]);
    }
}
