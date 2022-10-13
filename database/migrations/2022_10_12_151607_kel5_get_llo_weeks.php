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
        //melihat llo dipelajari di minggu ke berapa dimulai dari llo n ke llo m
        $procedure = "DROP PROCEDURE IF EXISTS `kel5_getLloWeeks`;
            CREATE PROCEDURE `kel5_getLloWeeks` (IN n int, IN m INT)
            BEGIN
            WHILE (n <= m) DO
            SELECT lp.week_number, llo.id, llo.description
            FROM lesson_learning_outcomes llo
            INNER JOIN learning_plans lp ON llo.id = lp.llo_id
            WHERE llo.id = n;
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
