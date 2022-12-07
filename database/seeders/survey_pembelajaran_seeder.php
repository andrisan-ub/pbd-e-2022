<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        [
            'id'=>1,
            'pertanyaan'=>'Sikap pengajar selama mengajar',
            'jenis_survey'=>'Survey untuk pengajar',
            'skor'=>'3',
            'saran'=>'Sebaiknya lebih sabar lagi',
        ],
        [
            'id'=>2,
            'pertanyaan'=>'Kejelasan materi yang diberikan oleh pengajar',
            'jenis_survey'=>'Survey untuk pengajar',
            'skor'=>'4',
            'saran'=>'Sebaiknya lebih banyak memberi tugas',
        ],
        [
            'id'=>3,
            'pertanyaan'=>'Kelengkapan materi yang disampaikan',
            'jenis_survey'=>'Survey untuk pengajar',
            'skor'=>'3',
            'saran'=>'Tidak ada',
        ],
        [
            'id'=>4,
            'pertanyaan'=>'Apakah mahasiswa dapat mempelajari mata kuliah dengan baik?',
            'jenis_survey'=>'Survey untuk mata kuliah',
            'skor'=>'4',
            'saran'=>'Sebaiknya pembelajaran tidak dilakukan dengan 3sks',
        ],
        [
            'id'=>5,
            'pertanyaan'=>'Apakah jenis mata kuliah mempengaruhi semangat belajar anda?',
            'jenis_survey'=>'Survey untuk mata kuliah',
            'skor'=>'5',
            'saran'=>'Sebaiknya setiap jadwal mata kuliah diberi jeda agar tidak pusing',
        ],
        [
            'id'=>6,
            'pertanyaan'=>'Apakah pelaksanaan praktikum sesuai dengan materi yang diajarkan?',
            'jenis_survey'=>'Survey untuk mata kuliah',
            'skor'=>'5',
            'saran'=>'Sudah sangat sesuai',
        ],
        [
            'id'=>7,
            'pertanyaan'=>'Apakah media ajar yang diberikan dosen sudah membantu proses belajar anda?',
            'jenis_survey'=>'Survey untuk pengajar',
            'skor'=>'4',
            'saran'=>'Membantu',
        ],
        [
            'id'=>8,
            'pertanyaan'=>'Apakah cara mengajar dosen sudah efektif dan efisien',
            'jenis_survey'=>'Survey untuk pengajar',
            'skor'=>'4',
            'saran'=>'Sebaiknya pembelajaran dilakukan secara daring dan luring untuk menghindari kejenuhan',
        ],
        [
            'id'=>9,
            'pertanyaan'=>'Apakah tugas yang diberikan dosen membebani mahasiswa',
            'jenis_survey'=>'Survey untuk pengajar',
            'skor'=>'5',
            'saran'=>'Sebaiknya dalam satu semester hanya ada 1 tugas yang ringan sebagai acuan penilaian',
        ],
    ]); 
  }
}
