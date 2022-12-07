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
        //SP - Update Survey(users_name, jenis_survey, skor)
        $procedure_update = "DROP PROCEDURE IF EXIST 'update_survey';
            CREATE PROCEDURE 'update_survey' (
                in p_users_name varchar(255),
                in up_jenis_survey TEXT,
                in up_skor int(11)
            )
            begin
                UPDATE survey_pembelajaran
                SET users_name = p_users_name, jenis_survey = up_jenis_survey, skor = up_skor
                WHERE 10;
            END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('update_survey');
    }
};
