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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_delete_lesson_learning_outcomes`;
        CREATE PROCEDURE `sp_delete_lesson_learning_outcomes` (
            in dr_id int,
        )
        BEGIN
            delete from lesson_learning_outcomes
            where id = dr_id;
        END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_delete_lesson_learning_outcomes');
    }
};
