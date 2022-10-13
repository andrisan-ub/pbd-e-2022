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
        //Menambah data departemen
        $a = "DROP PROCEDURE IF EXISTS `kelompok4_insertDepartments`;
                CREATE PROCEDURE `kelompok4_insertDepartments`(
                    in_id bigint(20),
                    in_faculty_id bigint(20),
                    in_name varchar(255)
                )
                BEGIN
                INSERT INTO departments
                VALUES(in_id, in_faculty_id, in_name);
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
        Schema::dropIfExists('stored_procedure_02');
    }
};
