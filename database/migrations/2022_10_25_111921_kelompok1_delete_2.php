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
        $procedure = "DROP PROCEDURE IF EXISTS `delete_2`;
        CREATE PROCEDURE `delete_2` (dr_assignments_id bigint)
        BEGIN
        DELETE FROM assignments
        WHERE student_grades.assignment_id = assignments.id;
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
