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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok5_read_user_course`;
            CREATE PROCEDURE `kelompok5_read_user_course`()
            BEGIN
            SELECT u.id, u.name, cc.name FROM course_classes cc
            JOIN join_classes jc ON cc.id = jc.course_class_id
            JOIN users u ON u.id = jc.student_user_id;
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
