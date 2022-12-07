<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $store_procedure = "DROP PROCEDURE IF EXISTS `show_exam_schedules`;
        CREATE PROCEDURE `show_exam_schedules`(
                IN exam_date date 
            )
            BEGIN 
            DECLARE curs_date date;
            DECLARE curs_CourseName,curs_RoomName VARCHAR(50);
            DECLARE curs_start,curs_endTime time;
            DECLARE Tot_exam,curs_end INT;
            
            DECLARE cursor1 CURSOR FOR
                SELECT  ex.date,cc.name,r.name,ex.start_time,ex.end_time 
                FROM `exam_schedules` ex JOIN course_classes cc ON ex.course_class_id=cc.id 
                JOIN rooms r ON ex.room_id=r.id ;
            
            DECLARE CONTINUE HANDLER FOR NOT FOUND SET curs_end=1;
            SET Tot_exam=0;
            
            OPEN cursor1;
                WHILE curs_end is null DO
                    IF curs_date = exam_date THEN 
                           SELECT curs_date, curs_CourseName,curs_RoomName, curs_start,curs_endTime;
                        SET Tot_exam=Tot_exam+1;
                     END IF;
                 FETCH FROM cursor1 INTO curs_date, curs_CourseName,curs_RoomName, curs_start,curs_endTime;
                END WHILE;
            CLOSE cursor1;
            SELECT Tot_exam;
            END";

        DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursor_show_exams_schedule');
    }
};
