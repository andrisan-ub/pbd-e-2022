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
        $procedure = "DROP PROCEDURE IF EXISTS `condition_courses_studyprograms`;
        CREATE PROCEDURE `condition_courses_studyprograms` (IN input VARCHAR(20), OUT output VARCHAR(50))
        BEGIN
        CASE input
    	    WHEN input = 'courses' THEN
        	    SET output = (SELECT study_programs.name FROM study_programs);
            WHEN input = 'studyprograms' THEN
        	    SET output = (SELECT courses.name FROM courses);
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
        Schema::dropIfExists(`kelompok6_condition_courses_studyprograms`);
    }
};
