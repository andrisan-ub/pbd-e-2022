<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        $procedure = "DROP PROCEDURE IF EXISTS 'insertDataStudyProgram';
        CREATE PROCEDURE 'insertDataStudyProgram' (
            in_id bigint(20),
            in_departement_id bigint(20),
            in_name varchar(255)
        )
        BEGIN
           INSERT INTO study_programs
           VALUES (in_id, in_departement_id, in_name);
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
        Schema::dropIfExists('insertDataStudyProgram');
    }
};
