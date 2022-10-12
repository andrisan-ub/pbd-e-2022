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
        //melihat study_material dan deskripsinya dari llo dengan id ke n sampai llo id ke m
        $procedure = "DROP PROCEDURE IF EXISTS `kel5_seeStudyMaterianAndDescription`;
            CREATE PROCEDURE `kel5_seeStudyMaterianAndDescription` (IN n INT,IN m INT)
            BEGIN
                WHILE (n <= m) DO
                SELECT lesson_learning_outcome.id, learning_plan.study_material, lesson_learning_outcome.description
                FROM lesson_learning_outcome, learning_plan
                WHERE lesson_learning_outcome.id = learning_plan.llo_id AND lesson_learning_outcome.id = n;
                SET n = n + 1;
                END WHILE;
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
