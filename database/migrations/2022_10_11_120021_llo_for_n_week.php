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
        //melihat llo id dipelajari di minggu ke berapa untuk llo id n sampai llo id m
        $procedure = "DROP PROCEDURE IF EXISTS `lloForNWeek`;
            CREATE PROCEDURE `lloForNWeek` (IN n INT, IN m INT)
            BEGIN
                WHILE (n <= m) DO
                SELECT week_number, lesson_learning_outcome.id
                FROM learning_plan, lesson_learning_outcome
                WHERE learning_plan.llo_id = lesson_learning_outcome.id AND lesson_learning_outcome.id = n ;
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
