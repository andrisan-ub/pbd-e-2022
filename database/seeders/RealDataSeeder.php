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
        $id_study_program = [1, 2];
        $id_faculty = [1, 2];
        $name = ["Teknologi Informasi", "Teknik Informatika"];

        for ($i=0; $i < sizeof($id_study_program); $i++) { 
            DB::table('study_program')->insert([
                'id' => $id_study_program[$i],
                'faculty_id' => $id_faculty[$i],
                'name' => $name[$i],
            ]);
        }
        
        DB::table('Faculty')->insert([
            'id' => 123,
            'name' => "Fakultas Ilmu Komputer",
        ]);
        
        DB::table('study_program')->insert([
            'id' => 54321,
            'faculty_id' => 12345,
            'name' => "Teknik Komputer"
        ]);
        
        DB::table('users')->insert([
            'id' => 2345678765,
            'student_id' => "345678987654" ,
        ]);
        
        DB::table('study_program')->insert([
            'id' => 567 ,
            'faculty_id' => 432,
            'name' => "Teknik Informatika",
        ]);
        
        DB::table('rubric')->insert([
            'id'=>111,
            'name'=>"penilaian uts",
            'assignment_id'=>11,
            'created_at'=>16012022,
            'updated_at'=>17012022,
        ]);
        
        DB::table('student')->insert([
            'id' => 1314,
            'student_id' => '215150707111040',
        ]);
                    
        DB::table('users')->insert([
            'id' => 001,
            'name' => "Bionka",
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => "bionka123",
            'remember_token' => "exampletoken",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

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