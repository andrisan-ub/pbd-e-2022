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
        $store_procedure="DROP PROCEDURE IF EXISTS `kelompok4_readsyllabuswithilo`;
        CREATE PROCEDURE `kelompok4_readsyllabuswithilo`()
        BEGIN 
        SELECT courses.name, syllabi.title, intended_learning_outcomes.description
    FROM courses, syllabi, intended_learning_outcomes
    WHERE courses.id=syllabi.course_id AND syllabi.id=intended_learning_outcomes.syllabus_id;
        END
        ";

    DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok4_sylabuswithILO');
    }
};
