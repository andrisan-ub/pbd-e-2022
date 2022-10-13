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
    
        $store_procedure="DROP PROCEDURE IF EXISTS `kelompok4_readsyllabuswithilo`;
        CREATE PROCEDURE `kelompok4_readsyllabuswithilo`()
        BEGIN 
        SELECT course.name, syllabus.title, intended_learning_outcome.description
    FROM course, syllabus, intended_learning_outcome
    WHERE course.id=syllabus.course_id AND syllabus.id=intended_learning_outcome.syllabus_id;
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
        Schema::dropIfExists('kelompok4_readsyllabuswithilo');
    }
};
