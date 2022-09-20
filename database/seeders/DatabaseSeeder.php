<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cpl;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('dosen')->insert([
            'NIP' => '193728197483957',
            'nama'=> 'Bambang Pamungkas',
        ]);

        DB::table('mata_kuliah')->insert([
            'Kode_MK'=> 'CSD000333',
            'Nama_MK'=> 'Pemrograman Berbasis Data',
            'SKS' => 48,
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '215150738592475',
            'nama'=> 'Joko Tingkir',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '215150738592476',
            'nama'=> 'Budi Permana',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '215150738592477',
            'nama'=> 'Susi Susanti',
        ]);

        DB::table('cpl')->insert([
            'Kode_CPL' => 'L1',
            'Capaian'=> "Blablabla",
        ]);

        DB::table('cpl')->insert([
            'Kode_CPL' => 'L2',
            'Capaian'=> "Blebleble",
        ]);

        DB::table('cpl')->insert([ 
            'Kode_CPL' => 'L3',
            'Capaian'=> "Blobloblo",
        ]);

        DB::table('cpmk')->insert([
            'Kode_CPMK' => 'M1',
            'Capaian'=> "Blablabla",
        ]);

        DB::table('cpmk')->insert([
            'Kode_CPMK' => 'M2',
            'Capaian'=> "Blebleble",
        ]);

        DB::table('cpmk')->insert([
            'Kode_CPMK' => 'M3',
            'Capaian'=> "Blobloblo",
        ]);

        DB::table('sub_cpmk')->insert([
            'Kode_CPMK' => 'M1',
            'Kode_SUB_CPMK' => 'C1',
            'Capaian'=> "Blablabla",
        ]);

        DB::table('sub_cpmk')->insert([
            'Kode_CPMK' => 'M2',
            'Kode_SUB_CPMK' => 'C2',
            'Capaian'=> "Blebleble",
        ]);

        DB::table('sub_cpmk')->insert([
            'Kode_CpMK' => 'M3',
            'Kode_SUB_CPMK' => 'C3',
            'Capaian'=> "Blobloblo",
        ]);

        DB::table('bobot_penilaian')->insert([
            'Kode_SUB_CPMK' => 'C1',
            'Bobot_per_SUB_CPMK' => 5,
            'Bobot' => 8,
        ]);

        DB::table('bobot_penilaian')->insert([
            'Kode_SUB_CPMK' => 'C2',
            'Bobot_per_SUB_CPMK' => 9,
            'Bobot' => 7,
        ]);

        DB::table('bobot_penilaian')->insert([
            'Kode_SUB_CPMK' => 'C3',
            'Bobot_per_SUB_CPMK' => 9,
            'Bobot' => 4,
        ]);

        DB::table('lembar_kerja')->insert([
            'Kode_LK' => 'L1',
            'Kode_SUB_CPMK' => 'C1',
            'Judul_Tugas' => 'ERD',
        ]);

        DB::table('lembar_kerja')->insert([
            'Kode_LK' => 'L2',
            'Kode_SUB_CPMK' => 'C2',
            'Judul_Tugas' => 'PHP',
        ]);

        DB::table('lembar_kerja')->insert([
            'Kode_LK' => 'L3',
            'Kode_SUB_CPMK' => 'C1',
            'Judul_Tugas' => 'Laravel',
        ]);

        DB::table('rubrik')->insert([
            'Kode_LK' => 'L1',
            'Kode_CPMK' => 'M1',
            'Kode_SUB_CPMK' => 'C1',
            'Indikator' => 'indikator1',
            'Score' => 2.5 ,
        ]);

        DB::table('rubrik')->insert([
            'Kode_LK' => 'L2',
            'Kode_CPMK' => 'M2',
            'Kode_SUB_CPMK' => 'C2',
            'Indikator' => 'indikator2',
            'Score' => 3.5 ,
        ]);
        DB::table('rubrik')->insert([
            'Kode_LK' => 'L3',
            'Kode_CPMK' => 'M3',
            'Kode_SUB_CPMK' => 'C3',
            'Indikator' => 'indikator3',
            'Score' => 4.5 ,
        ]);

    }
}
