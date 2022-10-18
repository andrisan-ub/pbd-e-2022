<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `condition_faculties_departments`;
        CREATE PROCEDURE `condition_faculties_departments` (IN input VARCHAR(20), OUT output VARCHAR(50))
        BEGIN
        CASE input
    	    WHEN input = 'faculties' THEN
        	    SET output = (SELECT departments.name FROM departments);
            WHEN input = 'departments' THEN
        	    SET output = (SELECT faculties.name FROM faculties);
	    END CASE;
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
        Schema::dropIfExists(`kelompok6_condition_faculties_departments`);
    }
};
