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
        //
        $procedure = "DROP PROCEDURE IF EXIST 'kelompok1_delete_data_course_classes';
        CREATE PROCEDURE 'kelompok1_delete_data_course_classes'(
            dr_course_classes_id bigint
            )
        BEGIN 
            DELETE FROM student_grades
            WHERE courses.id = course_classes.course_id
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
