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
        DB::table('faculties')->insert([
            'id'=>1,
            'name'=>'Ilmu Komputer'
        ]);

        DB::table('departments')->insert([
            'id'=>1,
            'faculty_id'=>1,
            'name'=>'Sistem Informasi'
        ]);

        DB::table('study_programs')->insert([
            'id'=>1,
            'department_id'=>1,
            'name'=>'Teknologi Informasi'
        ]);

        DB::table('courses')->insert([
            'id'=>1,
            'study_program_id'=>1,
            'name'=>'Kewirausahaan'
        ]);

        DB::table('courses')->insert([
            'id'=>2,
            'study_program_id'=>1,
            'name'=>'Analisis dan Desain Sistem Informasi'
        ]);

        DB::table('courses')->insert([
            'id'=>3,
            'study_program_id'=>1,
            'name'=>'Jaringan Komputer Dasar'
        ]);

        DB::table('courses')->insert([
            'id'=>4,
            'study_program_id'=>1,
            'name'=>'Pemrograman Basis Data'
        ]);

        DB::table('courses')->insert([
            'id'=>5,
            'study_program_id'=>1,
            'name'=>'Algoritma dan Struktur Data'
        ]);

        DB::table('courses')->insert([
            'id'=>6,
            'study_program_id'=>1,
            'name'=>'Pengembangan Aplikasi Web'
        ]);

        DB::table('courses')->insert([
            'id'=>7,
            'study_program_id'=>1,
            'name'=>'Etika Profesi'
        ]);

        DB::table('course_classes')->insert([
            'id'=>1,
            'course_id'=>1,
            'name'=>'KWU - A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>2,
            'course_id'=>2,
            'name'=>'ADSI - A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>3,
            'course_id'=>3,
            'name'=>'JARKOM - A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>4,
            'course_id'=>4,
            'name'=>'PBD - A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>5,
            'course_id'=>5,
            'name'=>'ASD - A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>6,
            'course_id'=>6,
            'name'=>'PAW - A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>7,
            'course_id'=>7,
            'name'=>'ETPROF - A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>8,
            'course_id'=>1,
            'name'=>'KWU - B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>9,
            'course_id'=>2,
            'name'=>'ADSI - B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>10,
            'course_id'=>3,
            'name'=>'JARKOM - B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>11,
            'course_id'=>4,
            'name'=>'PBD - B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>12,
            'course_id'=>5,
            'name'=>'ASD - B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>13,
            'course_id'=>6,
            'name'=>'PAW - B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>14,
            'course_id'=>7,
            'name'=>'ETPROF - B'
        ]);

        DB::table('days')->insert([
            'id'=>1,
            'name'=>'Senin'
        ]);

        DB::table('days')->insert([
            'id'=>2,
            'name'=>'Selasa'
        ]);

        DB::table('days')->insert([
            'id'=>3,
            'name'=>'Rabu'
        ]);

        DB::table('days')->insert([
            'id'=>4,
            'name'=>'Kamis'
        ]);

        DB::table('days')->insert([
            'id'=>5,
            'name'=>'Jumat'
        ]);

        DB::table('start_times')->insert([
            'id'=>1,
            'time'=>'06:30:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>2,
            'time'=>'07:00:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>3,
            'time'=>'07:30:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>4,
            'time'=>'08:00:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>5,
            'time'=>'08:30:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>6,
            'time'=>'09:00:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>7,
            'time'=>'09:30:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>8,
            'time'=>'10:00:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>9,
            'time'=>'10:30:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>10,
            'time'=>'11:00:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>11,
            'time'=>'11:30:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>12,
            'time'=>'12:00:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>13,
            'time'=>'12:30:00'
        ]);

        DB::table('start_times')->insert([
            'id'=>14,
            'time'=>'13:00:00'
        ]);
   
        DB::table('end_times')->insert([
            'id'=>1,
            'time'=>'06:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>2,
            'time'=>'07:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>3,
            'time'=>'07:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>4,
            'time'=>'08:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>5,
            'time'=>'08:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>6,
            'time'=>'09:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>7,
            'time'=>'09:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>8,
            'time'=>'10:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>9,
            'time'=>'10:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>10,
            'time'=>'11:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>11,
            'time'=>'11:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>12,
            'time'=>'12:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>13,
            'time'=>'12:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>14,
            'time'=>'13:29:59'
        ]);

        DB::table('rooms')->insert([
            'id'=>1,
            'name'=>'F2.1'
        ]);

        DB::table('rooms')->insert([
            'id'=>2,
            'name'=>'F2.2'
        ]);

        DB::table('rooms')->insert([
            'id'=>3,
            'name'=>'F2.3'
        ]);

        DB::table('rooms')->insert([
            'id'=>4,
            'name'=>'F2.4'
        ]);

        DB::table('rooms')->insert([
            'id'=>5,
            'name'=>'F2.5'
        ]);

        DB::table('rooms')->insert([
            'id'=>6,
            'name'=>'F3.1'
        ]);

        DB::table('rooms')->insert([
            'id'=>7,
            'name'=>'F3.2'
        ]);

        DB::table('rooms')->insert([
            'id'=>8,
            'name'=>'F3.3'
        ]);

        DB::table('rooms')->insert([
            'id'=>9,
            'name'=>'F3.4'
        ]);

        DB::table('rooms')->insert([
            'id'=>10,
            'name'=>'F3.5'
        ]);

        DB::table('rooms')->insert([
            'id'=>11,
            'name'=>'F4.1'
        ]);

        DB::table('rooms')->insert([
            'id'=>12,
            'name'=>'F4.2'
        ]);

        DB::table('rooms')->insert([
            'id'=>13,
            'name'=>'F4.3'
        ]);

        DB::table('rooms')->insert([
            'id'=>14,
            'name'=>'F4.4'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1001,
            'room_id'=>1,
            'course_class_id'=>1,
            'date'=>'2022-12-19',
            'start_time'=>'06:30:00',
            'end_time'=>'07:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1002,
            'room_id'=>2,
            'course_class_id'=>2,
            'date'=>'2022-12-19',
            'start_time'=>'07:00:00',
            'end_time'=>'07:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2001,
            'room_id'=>3,
            'course_class_id'=>8,
            'date'=>'2022-12-19',
            'start_time'=>'07:30:00',
            'end_time'=>'08:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2002,
            'room_id'=>4,
            'course_class_id'=>9,
            'date'=>'2022-12-20',
            'start_time'=>'08:00:00',
            'end_time'=>'08:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2003,
            'room_id'=>5,
            'course_class_id'=>10,
            'date'=>'2022-12-20',
            'start_time'=>'08:30:00',
            'end_time'=>'09:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1003,
            'room_id'=>6,
            'course_class_id'=>13,
            'date'=>'2022-12-20',
            'start_time'=>'09:30:00',
            'end_time'=>'10:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1004,
            'room_id'=>7,
            'course_class_id'=>4,
            'date'=>'2022-12-21',
            'start_time'=>'10:00:00',
            'end_time'=>'10:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1005,
            'room_id'=>8,
            'course_class_id'=>5,
            'date'=>'2022-12-21',
            'start_time'=>'10:30:00',
            'end_time'=>'11:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2004,
            'room_id'=>9,
            'course_class_id'=>11,
            'date'=>'2022-12-21',
            'start_time'=>'11:00:00',
            'end_time'=>'11:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2005,
            'room_id'=>10,
            'course_class_id'=>12,
            'date'=>'2022-12-22',
            'start_time'=>'11:30:00',
            'end_time'=>'12:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2006,
            'room_id'=>11,
            'course_class_id'=>13,
            'date'=>'2022-12-22',
            'start_time'=>'12:00:00',
            'end_time'=>'12:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1006,
            'room_id'=>12,
            'course_class_id'=>6,
            'date'=>'2022-12-22',
            'start_time'=>'12:30:00',
            'end_time'=>'13:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1007,
            'room_id'=>13,
            'course_class_id'=>7,
            'date'=>'2022-12-23',
            'start_time'=>'13:00:00',
            'end_time'=>'13:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2007,
            'room_id'=>14,
            'course_class_id'=>14,
            'date'=>'2022-12-23',
            'start_time'=>'13:30:00',
            'end_time'=>'14:00:00'
        ]);





        DB::table('class_schedules')->insert([
            'id'=>3001,
            'room_id'=>1,
            'course_class_id'=>1,
            'day_id'=>1,
            'start_id'=>1,
            'end_id'=>1
        ]);

        DB::table('class_schedules')->insert([
            'id'=>3002,
            'room_id'=>2,
            'course_class_id'=>2,
            'day_id'=>1,
            'start_id'=>2,
            'end_id'=>2
        ]);

        DB::table('class_schedules')->insert([
            'id'=>4001,
            'room_id'=>3,
            'course_class_id'=>8,
            'day_id'=>1,
            'start_id'=>3,
            'end_id'=>3
        ]);

        DB::table('class_schedules')->insert([
            'id'=>4002,
            'room_id'=>4,
            'course_class_id'=>9,
            'day_id'=>2,
            'start_id'=>3,
            'end_id'=>3
        ]);

        DB::table('class_schedules')->insert([
            'id'=>4003,
            'room_id'=>5,
            'course_class_id'=>10,
            'day_id'=>2,
            'start_id'=>4,
            'end_id'=>4
        ]);

        DB::table('class_schedules')->insert([
            'id'=>3003,
            'room_id'=>6,
            'course_class_id'=>3,
            'day_id'=>2,
            'start_id'=>5,
            'end_id'=>5
        ]);

        DB::table('class_schedules')->insert([
            'id'=>3004,
            'room_id'=>7,
            'course_class_id'=>4,
            'day_id'=>3,
            'start_id'=>4,
            'end_id'=>4
        ]);

        DB::table('class_schedules')->insert([
            'id'=>3005,
            'room_id'=>8,
            'course_class_id'=>5,
            'day_id'=>3,
            'start_id'=>5,
            'end_id'=>5
        ]);

        DB::table('class_schedules')->insert([
            'id'=>4004,
            'room_id'=>9,
            'course_class_id'=>11,
            'day_id'=>3,
            'start_id'=>6,
            'end_id'=>6
        ]);

        DB::table('class_schedules')->insert([
            'id'=>4005,
            'room_id'=>10,
            'course_class_id'=>12,
            'day_id'=>4,
            'start_id'=>5,
            'end_id'=>5
        ]);

        DB::table('class_schedules')->insert([
            'id'=>4006,
            'room_id'=>11,
            'course_class_id'=>13,
            'day_id'=>4,
            'start_id'=>6,
            'end_id'=>6
        ]);

        DB::table('class_schedules')->insert([
            'id'=>3006,
            'room_id'=>12,
            'course_class_id'=>6,
            'day_id'=>4,
            'start_id'=>7,
            'end_id'=>7
        ]);

        DB::table('class_schedules')->insert([
            'id'=>3007,
            'room_id'=>13,
            'course_class_id'=>7,
            'day_id'=>5,
            'start_id'=>7,
            'end_id'=>7
        ]);

        DB::table('class_schedules')->insert([
            'id'=>4007,
            'room_id'=>14,
            'course_class_id'=>14,
            'day_id'=>5,
            'start_id'=>8,
            'end_id'=>8
        ]);
   
    }
}
