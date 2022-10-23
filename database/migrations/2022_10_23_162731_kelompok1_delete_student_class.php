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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok1_deleteStudentClass`;
        CREATE PROCEDURE 'kelompok1_deleteStudentClass' (dr_course_class_id )
        BEGIN
            DELETE FROM join_classes
            WHERE join_class.course_class_id = dr_course_class_id;
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
