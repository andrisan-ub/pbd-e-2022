<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok1_loop_kelas`;
        CREATE PROCEDURE 'kelompok1_loop_kelas' (in_input int)
        BEGIN
        DECLARE v INT;
        SET v = 0;
        looping:LOOP
            if v > in_input THEN
                LEAVE looping;
                END IF;
            SET v = v + 1;
            SELECT courses.id as id_mata_kuliah, courses.name as nama_mata_kuliah, course_classes.id as id_kelas, course_classes.name as nama_kelas
            FROM courses
            JOIN course_classes ON courses.id = course_classes.course_id
            WHERE courses.id = v
            AND courses.id = course_classes.course_id;
        END LOOP;
        END;";

        DB::unprepared($procedure); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok1_loop_kelas');
    }
};
