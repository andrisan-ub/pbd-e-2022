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
        DB::table('rubric')->insert([
            'id'=>111,
            'name'=>"penilaian uts",
            'assignment_id'=>11,
            'created_at'=>16012022,
            'updated_at'=>17012022,
        ]);
    }
}
