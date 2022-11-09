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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_update_data_lesson_learning_outcomes`;
            CREATE PROCEDURE `Sp_update_data_lesson_learning_outcomes` (
                in p_id int,
                in up_position varchar(1024)
            )
            BEGIN
                update lesson_learning_outcomes set position = up_position
                where id=p_id;
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
        Schema::dropIfExists('sp_update_lesson_learning_outcomes');
    }
};
