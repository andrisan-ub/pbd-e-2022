<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyProgramSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

    }
}
