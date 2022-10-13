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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_getStudentClass`;
        CREATE PROCEDURE `kelompok4_getStudentClass` (IN ncls int, IN mcls int)
        BEGIN
            WHILE (ncls <= mcls) DO
                SELECT u.id , u.name , jc.course_class_id 
                FROM users u 
                JOIN join_classes jc 
                ON jc.student_user_id = u.id 
                WHERE jc.course_class_id = ncls;
                SET ncls = ncls + 1;            
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
        Schema::dropIfExists('kelompok4_getStudentClass');
    }
};
