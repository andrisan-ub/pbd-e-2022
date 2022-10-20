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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_learning_plans_looping`;
        CREATE PROCEDURE `sp_learning_plans_looping` (
            IN week_number int
        )
        begin
             DECLARE i int;
             SET i = 0; 
             ulangi:LOOP
             if i > week_number then
             leave ulangi;
             END if;
             SET i = i + 1;
             SELECT syllabus_id, week_number, study_material, learning_method FROM learning_plans where id = i;
             END loop;
            END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp_learning_plans_looping');
    }
};
