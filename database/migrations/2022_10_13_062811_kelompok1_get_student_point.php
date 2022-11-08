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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok1_getStudentPoint`;
        CREATE PROCEDURE `kelompok1_getStudentPoint` (IN min_point int, IN max_point int)
        BEGIN
            WHILE (min_point <= max_point) DO
                SELECT u.name, SUM(cl.point) as point
                FROM users u 
                JOIN student_grades sg 
                ON sg.student_user_id = u.id 
                join criteria_levels cl 
                ON sg.criteria_level_id  = cl.id 
                GROUP BY u.name
                HAVING SUM(cl.point) = min_point;
                SET min_point = min_point + 1;
            END WHILE;
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
        Schema::dropIfExists('kelompok1_get_student_point');
    }
};
