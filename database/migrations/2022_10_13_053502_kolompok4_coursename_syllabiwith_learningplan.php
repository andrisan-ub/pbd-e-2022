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
	SELECT  courses.name, syllabi.title, learning_plans.week_number, learning_plans.study_material, learning_plans.estimated_time
    FROM courses,syllabi,learning_plans
    WHERE courses.id=syllabi.course_id AND syllabi.id=learning_plans.syllabus_id;
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
        Schema::dropIfExists('kolompok4_coursenameSyllabiwithLearningplan');
    }
};
