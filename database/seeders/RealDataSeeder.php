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
            'id' => 54321,
            'faculty_id' => 12345,
            'name' => "Teknik Komputer"
        ]);
    }
}
