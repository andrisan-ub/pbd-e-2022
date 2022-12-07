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
        // DB::table('study_program')->insert([
        //     'id'=>1,
        //     'faculty_id'=>1,
        //     'name'=>'Teknologi Informasi'
        // ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Organisasi',
            'tingkat' => 'Prodi',
            'point' => 250
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Organisasi',
            'tingkat' => 'Fakultas',
            'point' => 300
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Organisasi',
            'tingkat' => 'Universitas',
            'point' => 350
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepanitiaan',
            'tingkat' => 'Prodi',
            'point' => 75
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepanitiaan',
            'tingkat' => 'Fakultas',
            'point' => 100
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepanitiaan',
            'tingkat' => 'Universitas',
            'point' => 200
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepanitiaan',
            'tingkat' => 'Nasional',
            'point' => 300
        ]);
        
        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepanitiaan',
            'tingkat' => 'Internasional',
            'point' => 500
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kejuaraan',
            'tingkat' => 'Prodi',
            'point' => 75
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kejuaraan',
            'tingkat' => 'Fakultas',
            'point' => 100
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kejuaraan',
            'tingkat' => 'Universitas',
            'point' => 200
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kejuaraan',
            'tingkat' => 'Nasional',
            'point' => 600
        ]);
        
        DB::table('skm_points')->insert([
            'kegiatan' => 'Kejuaraan',
            'tingkat' => 'Internasional',
            'point' => 1000
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepesertaan',
            'tingkat' => 'Fakultas',
            'point' => 50
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepesertaan',
            'tingkat' => 'Universitas',
            'point' => 75
        ]);

        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepesertaan',
            'tingkat' => 'Nasional',
            'point' => 200
        ]);
        
        DB::table('skm_points')->insert([
            'kegiatan' => 'Kepesertaan',
            'tingkat' => 'Internasional',
            'point' => 250
        ]);


    }
}
