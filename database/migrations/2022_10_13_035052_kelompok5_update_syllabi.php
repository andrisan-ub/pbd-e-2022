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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok5_update_syllabi`;
            CREATE PROCEDURE `kelompok5_update_syllabi` (
                IN up_id bigint,
                IN up_course_id bigint,
                IN up_title varchar(1024),
                IN up_author text,
                IN up_head_of_study_program varchar(512)
                )
            BEGIN
                update syllabi set course_id = up_course_id, 
                    title = up_title, 
                    author = up_author,  
                    head_of_study_program = up_head_of_study_program
                where id = up_id;
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
