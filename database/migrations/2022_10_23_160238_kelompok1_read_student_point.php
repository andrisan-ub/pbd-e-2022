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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok1_readStudentPoint`;
        CREATE PROCEDURE 'kelompok1_readStudentPoint'()
        BEGIN
            SELECT jc.course_class_id, u.name, SUM(cl.point) AS NILAI
            FROM join_classes jc, users u, criteria_levels cl
            JOIN student_grades sg
            WHERE sg.student_user_id = jc.student_user_id AND
            cl.id = sg.criteria_level_id AND
            u.id = sg.student_user_id AND
            jc.course_class_id = 2
            GROUP BY jc.course_class_id, u.name, cl.point
            ORDER BY NILAI ASC;
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
