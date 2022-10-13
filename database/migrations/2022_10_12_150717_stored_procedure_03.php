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
        //Menambah data rubrics
        $a = "DROP PROCEDURE IF EXISTS `kelompok4_insertRubrics`;
                CREATE PROCEDURE `kelompok4_insertRubrics`(
                    in_id bigint(20),
                    in_assignment_plan_id bigint(20),
                    in_title varchar(1024),
                    in_created_at timestamp,
                    in_update_at timestamp
                )
                BEGIN
                INSERT INTO rubrics
                VALUES(in_id, in_assignment_plan_id, in_title, in_created_at, in_update_at);
                END;";

    DB::unprepared($a);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_procedured_03');
    }
};
