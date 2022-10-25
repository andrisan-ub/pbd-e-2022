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
        $store_procedure = "DROP PROCEDURE IF EXISTS `kelompok6_delete`;
        CREATE PROCEDURE `kelompok6_delete`()
        BEGIN
        DELETE FROM student_grades 
        WHERE assignment_id =
            (SELECT assignments.id FROM assignments 
            WHERE assigned_date > due_date);
        END;";

        DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok6_delete');
    }
};
