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
        $procedure = "DROP PROCEDURE IF EXIST 'kelompok1_update_dataStudy';
        CREATE PROCEDURE 'kelompok1_update_dataStudy'(
            IN up_id bigint,
            IN up_name varchar(255)
        )
        BEGIN
            UPDATE study_programs SET name = up_name
            WHERE study_programs.name = up_name;
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
        Schema::dropIfExists('kelompok1_update_data_study');
    }
};
