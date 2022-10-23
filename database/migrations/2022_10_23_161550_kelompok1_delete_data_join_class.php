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
        $procedure = "DROP PROCEDURE IF EXISTS 'kelompok1_delete_data_join_class';
        CREATE PROCEDURE 'deleteDataJoinClass'(in_inp int)
            BEGIN
                DELETE FROM join_classes
                WHERE join_class.course_class_id = dr_course_class_id;
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
        Schema::dropIfExists('deleteDataJoinClass');
    }
};
