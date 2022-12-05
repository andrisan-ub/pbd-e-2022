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
        //melihat student point dengan rentang nilai dari n ke m
        $procedure = "DROP PROCEDURE IF EXISTS `kel5_getStudentPoint`;
            CREATE PROCEDURE `kel5_getStudentPoint` (IN n int, IN m INT)
            BEGIN
            WHILE (n <= m) DO
            SELECT u.name, SUM(cl.point)
            FROM course_classes
            JOIN join_classes jc on course_classes.id = jc.course_class_id
            JOIN users u on u.id = jc.student_user_id
            JOIN student_grades sg on u.id = sg.student_user_id
            JOIN criteria_levels cl on cl.id = sg.criteria_level_id
            GROUP BY u.name
            having SUM(cl.point) = n;
            SET n = n + 1;
            END WHILE;
            END;";
  
        \DB::unprepared($procedure);
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
