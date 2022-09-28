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
        DB::table('study_program')->insert([
            'id' => 567 ,
            'faculty_id' => 432,
            'name' => "Teknik Informatika",
        ]);
    }
}
