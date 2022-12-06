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
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>2,
            'course_id'=>2,
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>3,
            'course_id'=>3,
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>4,
            'course_id'=>4,
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>5,
            'course_id'=>5,
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>6,
            'course_id'=>6,
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>7,
            'course_id'=>7,
            'name'=>'A'
        ]);

        DB::table('course_classes')->insert([
            'id'=>8,
            'course_id'=>1,
            'name'=>'B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>9,
            'course_id'=>2,
            'name'=>'B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>10,
            'course_id'=>3,
            'name'=>'B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>11,
            'course_id'=>4,
            'name'=>'B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>12,
            'course_id'=>5,
            'name'=>'B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>13,
            'course_id'=>6,
            'name'=>'B'
        ]);

        DB::table('course_classes')->insert([
            'id'=>14,
            'course_id'=>7,
            'name'=>'B'
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
            'time'=>'06:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>3,
            'time'=>'07:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>4,
            'time'=>'07:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>5,
            'time'=>'08:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>6,
            'time'=>'08:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>7,
            'time'=>'09:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>8,
            'time'=>'09:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>9,
            'time'=>'10:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>10,
            'time'=>'10:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>11,
            'time'=>'11:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>12,
            'time'=>'11:29:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>13,
            'time'=>'12:59:59'
        ]);

        DB::table('end_times')->insert([
            'id'=>14,
            'time'=>'12:29:59'
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
            'course_class_id'=>1,
            'room_id'=>1,
            'date'=>'2022-12-19',
            'start_time'=>'6:30:00',
            'end_time'=>'7:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1002,
            'course_class_id'=>2,
            'room_id'=>2,
            'date'=>'2022-12-19',
            'start_time'=>'7:00:00',
            'end_time'=>'7:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2001,
            'course_class_id'=>3,
            'room_id'=>8,
            'date'=>'2022-12-19',
            'start_time'=>'7:30:00',
            'end_time'=>'8:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2002,
            'course_class_id'=>4,
            'room_id'=>9,
            'date'=>'2022-12-20',
            'start_time'=>'8:00:00',
            'end_time'=>'8:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2003,
            'course_class_id'=>5,
            'room_id'=>10,
            'date'=>'2022-12-20',
            'start_time'=>'8:30:00',
            'end_time'=>'9:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1003,
            'course_class_id'=>6,
            'room_id'=>3,
            'date'=>'2022-12-20',
            'start_time'=>'9:30:00',
            'end_time'=>'10:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1004,
            'course_class_id'=>7,
            'room_id'=>4,
            'date'=>'2022-12-21',
            'start_time'=>'10:00:00',
            'end_time'=>'10:30:00'
        ]);
   
        DB::table('exam_schedules')->insert([
            'id'=>1005,
            'course_class_id'=>8,
            'room_id'=>5,
            'date'=>'2022-12-21',
            'start_time'=>'10:30:00',
            'end_time'=>'11:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2004,
            'course_class_id'=>9,
            'room_id'=>11,
            'date'=>'2022-12-21',
            'start_time'=>'11:00:00',
            'end_time'=>'11:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2005,
            'course_class_id'=>10,
            'room_id'=>12,
            'date'=>'2022-12-22',
            'start_time'=>'11:30:00',
            'end_time'=>'12:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2006,
            'course_class_id'=>11,
            'room_id'=>13,
            'date'=>'2022-12-22',
            'start_time'=>'12:00:00',
            'end_time'=>'12:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1006,
            'course_class_id'=>12,
            'room_id'=>6,
            'date'=>'2022-12-22',
            'start_time'=>'12:30:00',
            'end_time'=>'13:00:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>1007,
            'course_class_id'=>13,
            'room_id'=>7,
            'date'=>'2022-12-23',
            'start_time'=>'13:00:00',
            'end_time'=>'13:30:00'
        ]);

        DB::table('exam_schedules')->insert([
            'id'=>2007,
            'course_class_id'=>14,
            'room_id'=>14,
            'date'=>'2022-12-23',
            'start_time'=>'13:30:00',
            'end_time'=>'14:00:00'
        ]);
   
    }
}
