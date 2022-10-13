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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_insert_data_syllabi`;
            CREATE PROCEDURE `Sp_insert_data_syllabi` (
                in_id bigint(20),
                in_course_id bigint(20),
                in_title varchar(255),
                in_author text,
                in_head_of_study_program text varchar(512),
            )
            BEGIN
                insert into syllabi
                values(in_id, in_course_id, in_title, in_author, in_head_of_study_program);
            END;";
  
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_insert_data_syllabi');
    }
};
