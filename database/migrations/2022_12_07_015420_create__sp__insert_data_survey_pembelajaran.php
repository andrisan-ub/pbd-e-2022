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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_InsertDataSurveyPembelajaran`;
            CREATE PROCEDURE `Sp_InsertDataSurveyPembelajaran` (
                in_id bigint(20),
                in_users_name varchar(255),
                in_pertanyaan text,
                in_jenis_survey text,
                in_skor integer(11),
                in_saran text
            )
        begin
            insert into survey_pembelajaran
            values(in_id, in_users_name, in_pertanyaan, in_jenis_survey, in_skor, in_saran);
        end;";

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp__insert_data_survey_pembelajaran');
    }
};
