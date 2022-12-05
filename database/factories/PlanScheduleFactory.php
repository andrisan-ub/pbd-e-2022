<?php

namespace Database\Factories;

use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanSchedule>
 */
class PlanScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //nama nama matakuliah sekaligus kode-nya
        $courses = [
            ['Pemrograman Dasar', 'COM6001'],
            ['Pemrograman Lanjut', 'COM6002'],
            ['Jaringan Komputer', 'COM6003'],
            ['Pemrograman Mobile', 'COM6004'],
            ['Pengembangan Aplikasi Web', 'COM6005'],
            ['Jaringan Komputer', 'COM6006'],
            ['Analisis dan Desain Sistem Informasi', 'COM6007'],
            ['Implementasi dan Pengujian Sistem Informasi', 'COM6008'],
            ['Keamanan Jaringan', 'COM6009'],
            ['Matematika Diskrit', 'COM6010'],
            ['Pemrograman Jaringan', 'COM6011'],
            ['Kecerdasan Buatan', 'COM6012'],
            ['Bahasa Inggris', 'UB6001'],
            ['Bahasa Indonesia', 'UB6002'],
            ['Kewarganegaraan', 'UB6003'],
            ['Pancasila', 'UB6004'],
            ['Agama Islam', 'UB6005'],
            ['Agama Kristen', 'UB6006'],
            ['Agama Buddha', 'UB6007'],
            ['Agama Hindu', 'UB6008'],
            ['Skripsi', 'UB6009'],
            ['Dasar Pengembangan Sistem Informasi', 'COM6013'],
            ['Dasar Desain Antarmuka Pengguna', 'COM6014'],
            ['Sistem Basis Data', 'COM6015'],
            ['Pemrograman Basis Data', 'COM6016S'],
        ];
        $programStudies = [
            'Teknologi Informasi', 'Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer'
        ];

        $courseWithCode = $courses[random_int(0, sizeof($courses) - 1)];
        $course = $courseWithCode[0];
        $code = $courseWithCode[1];

        $classNames = ['A', 'B', 'C', 'D', 'E', 'F'];
        $class = $classNames[random_int(0, sizeof($classNames) - 1)];

        $programStudy = $programStudies[random_int(0, sizeof($programStudies) - 1)];

        //sks 1-5
        $sks = random_int(1, 5);

        return [
            'student_data_id' => StudentData::inRandomOrder()->first()->id,
            'program_studi' => $programStudy,
            'kelas' => $class,
            'kode' => $code,
            'mata_kuliah' => $course,
            'tahun_kurikulum' => fake()->year('now'),
            'sks' => $sks
        ];
    }
}
