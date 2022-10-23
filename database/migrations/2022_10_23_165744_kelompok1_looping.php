<?php

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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok1_looping`;
        CREATE PROCEDURE 'kelompok1_looping' (IN v, IN in_input)
        BEGIN
        DECLARE v INT;
        SET v = 0;
        looping:LOOP
            if v > in_input THEN
                LEAVE looping;
                END IF;
            SET v = v + 1;
            SELECT courses.id, courses.name, course_classes.name
            FROM courses
            JOIN course_classes ON course_classes.id = courses.id
            WHERE courses.id = v;
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
        //
    }
};
