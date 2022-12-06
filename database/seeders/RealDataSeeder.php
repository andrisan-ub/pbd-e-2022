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
        DB::table('faculties')->insert([
            'id'=>1,
            'name'=>'Ilmu Komputer'
        ]);

        DB::table('departments')->insert([
            'id'=>1,
            'faculty_id'=>1,
            'name'=>'Sistem Informasi'
        ]);

        DB::table('study_programs')->insert([
            'id'=>1,
            'department_id'=>1,
            'name'=>'Teknologi Informasi'
        ]);

        DB::table('courses')->insert([
            'id'=>1,
            'study_program_id'=>1,
            'creator_user_id'=>1,
            'name'=>'Kewirausahaan'
        ]);

        DB::table('courses')->insert([
            'id'=>2,
            'study_program_id'=>1,
            'creator_user_id'=>1,
            'name'=>'Analisis dan Desain Sistem Informasi'
        ]);

        DB::table('courses')->insert([
            'id'=>3,
            'study_program_id'=>1,
            'creator_user_id'=>1,
            'name'=>'Jaringan Komputer Dasar'
        ]);

        DB::table('courses')->insert([
            'id'=>4,
            'study_program_id'=>1,
            'creator_user_id'=>1,
            'name'=>'Pemrograman Basis Data'
        ]);

        DB::table('courses')->insert([
            'id'=>5,
            'study_program_id'=>1,
            'creator_user_id'=>1,
            'name'=>'Algoritma dan Struktur Data'
        ]);

        DB::table('courses')->insert([
            'id'=>6,
            'study_program_id'=>1,
            'creator_user_id'=>1,
            'name'=>'Pengembangan Aplikasi Web'
        ]);

        DB::table('courses')->insert([
            'id'=>7,
            'study_program_id'=>1,
            'creator_user_id'=>1,
            'name'=>'Etika Profesi'
        ]);

        DB::table('course_classes')->insert([
            'id'=>1,
            'course_id'=>1,
            'creator_user_id'=>1,
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>2,
            'course_id'=>1,
            'creator_user_id'=>1,
            'name'=>'B'
        ]);
   
    }
}
