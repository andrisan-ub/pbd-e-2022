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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_getCriterias`;
        CREATE PROCEDURE `kelompok4_getCriterias` (IN ncr int, IN mcr int)
        BEGIN
            WHILE (ncr <= mcr) DO
                SELECT *
                FROM criterias c 
                WHERE c.id = ncr;
                SET ncr = ncr + 1;            
            END WHILE;
        END;";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok4_getCriterias');
    }
};
