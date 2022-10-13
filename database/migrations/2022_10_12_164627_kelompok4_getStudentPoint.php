<?php

use GuzzleHttp\Promise\Create;
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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_getStudentPoint`;
        CREATE PROCEDURE `kelompok4_getStudentPoint` (IN npoin int, IN mpoin int)
        BEGIN
            WHILE (npoin <= mpoin) DO
                SELECT u.name, SUM(cl.point) as point
                FROM users u 
                JOIN student_grades sg 
                ON sg.student_user_id = u.id 
                join criteria_levels cl 
                ON sg.criteria_level_id  = cl.id 
                GROUP BY u.name
                HAVING SUM(cl.point) = npoin;
                SET npoin = npoin + 1;
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
        Schema::dropIfExists('kelompok4_getStudentPoint');
    }
};
