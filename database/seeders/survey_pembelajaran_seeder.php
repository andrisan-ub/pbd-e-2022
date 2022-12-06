<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class survey_pembelajaran_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('survey_pembelajaran')->insert([
            'id'=>1,
            'pertanyaan'=>'Sikap pengajar selama mengajar',
            'jenis_survey'=>'survey untuk pengajar',
            'skor'=>'2'
        ]);
    }
}
