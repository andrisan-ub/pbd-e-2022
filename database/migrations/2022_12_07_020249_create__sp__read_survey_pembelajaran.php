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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_ReadSurveyPembelajaran`;
            CREATE PROCEDURE `Sp_ReadSurveyPembelajaran` ()
            begin
                SELECT pertanyaan,skor FROM survey_pembelajaran WHERE skor<3;
            END";

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp__read_survey_pembelajaran');
    }
};
