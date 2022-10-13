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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_insert_lesson_learning_outcomes`;
            CREATE PROCEDURE `Sp_insert_lesson_learning_outcomes` (
            in_id int,
	        in_clo_id int,
	        in_position int,
	        in_description varchar(1024)
            )

            BEGIN
            insert into pbd.lesson_learning_outcomes 
            values (in_id, in_clo_id, in_position, in_description); 
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
        Schema::dropIfExists('sp_insert_lesson_learning_outcomes');
    }
};
