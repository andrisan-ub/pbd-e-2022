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
        $procedure = "DROP PROCEDURE IF EXISTS `read_departments_studyprograms`;
        CREATE PROCEDURE `read_departments_studyprograms` ( )
        BEGIN
            SELECT departments.name AS name_departments, study_programs.name AS name_study_programs
            FROM departments, study_programs
            WHERE departments.id = study_programs.department_id;
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
        Schema::dropIfExists(`kelompok6_read_departments_studyprograms`);
    }
};
