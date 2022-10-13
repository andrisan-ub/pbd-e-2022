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
        $store_procedure="DROP PROCEDURE IF EXISTS `kelompok4_readCourseNamewithLearningplan`;
        CREATE PROCEDURE `kelompok4_readCourseNamewithLearningplan`()
        BEGIN
	SELECT  course.name, syllabus.title, learning_plan.week_number, learning_plan.study_material, learning_plan.estimated_time
    FROM course,syllabus,learning_plan
    WHERE course.id=syllabus.course_id AND syllabus.id=learning_plan.syllabus_id;
END;
        
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
        Schema::dropIfExists('kelompok4_viewCoursenamewithLeaningplan');
    }
};
