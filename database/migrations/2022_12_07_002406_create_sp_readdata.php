<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure1 = "DROP PROCEDURE IF EXISTS `sp_read_classschedules`;
        CREATE PROCEDURE `sp_read_classschedules` (IN input_day VARCHAR(10))
        BEGIN
            SELECT days.name as days, start_times.time as start_times, end_times.time as end_times, 
            courses.name as courses, course_classes.name as classes, rooms.name as rooms
            FROM days, start_times, end_times, courses, course_classes, rooms, class_schedules
            WHERE input_day = days.name AND 
            course_classes.id = class_schedules.course_class_id AND
            days.id = class_schedules.day_id AND
            start_times.id = class_schedules.start_id AND
            end_times.id = class_schedules.end_id AND
            rooms.id = class_schedules.room_id AND
            courses.id = course_classes.course_id;
        END;";

        $procedure2 = "DROP PROCEDURE IF EXISTS `sp_read_examschedules`;
        CREATE PROCEDURE `sp_read_examschedules` (IN input_date DATE)
        BEGIN
            SELECT exam_schedules.date as date, 
            exam_schedules.start_time as start_time, exam_schedules.end_time as end_time,
            course_classes.name as class, courses.name as course, rooms.name as room
            FROM exam_schedules, course_classes, courses, rooms
            WHERE input_date = exam_schedules.date AND
            course_classes.course_id = courses.id AND
            exam_schedules.course_class_id = course_classes.id AND
            exam_schedules.room_id = rooms.id;
        END;";

        DB::unprepared($procedure1);
        DB::unprepared($procedure2);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_readdata');
    }
};
