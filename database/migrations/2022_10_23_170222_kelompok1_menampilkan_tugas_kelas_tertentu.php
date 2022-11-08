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
        $procedure = "DROP PROCEDURE IF EXISTS 'infoTugas';
        CREATE PROCEDURE 'infoTugas'(in_inp int)
        BEGIN
            SELECT asg.id as id_tugas, course_classes.name as nama_kelas, asg.assigned_date, asg.due_date, assignment_plans.objective, assignment_plans.title
            FROM assignments asg
            JOIN course_classes ON course_classes.id = asg.course_class_id
            JOIN assignment_plans ON assignment_plans.id = asg.assignment_plan_id
            WHERE asg.course_class_id = in_inp;
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
        Schema::dropIfExists('infoTugas');
    }
};
