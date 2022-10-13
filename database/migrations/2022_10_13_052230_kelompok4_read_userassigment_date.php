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
        $store_procedure="DROP PROCEDURE IF EXISTS `kelompok_4_readAssignmentdatewithStudentname`;
        CREATE PROCEDURE `kelompok_4_readAssignmentdatewithStudentname`()
        BEGIN 
        SELECT users.name,  assignments.assigned_date
        FROM student_grades,users, assignments
        WHERE users.id=student_grades.student_user_id AND assignments.id=student_grades.assignment_id ;
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
        Schema::dropIfExists('kelompok4_userAssigmentdate');
    }
};
