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
        //
        $procedure = "DROP PROCEDURE IF EXISTS `read2`;
        CREATE PROCEDURE `read2` ()
        BEGIN
        SELECT asg.id as assignment_id, course_classes.name as class_name, asg.assigned_date, asg.due_date, assignment_plans.objective, assignment_plans.title
        FROM assignments asg
        JOIN course_classes ON course_classes.id = asg.course_class_id
        JOIN assignment_plans ON assignment_plans.id = asg.assignment_plan_id
        WHERE asg.course_class_id = 2;
        END;";

    \DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
