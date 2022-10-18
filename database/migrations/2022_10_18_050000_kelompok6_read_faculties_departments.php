<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `read_faculties_departments`;
        CREATE PROCEDURE `read_faculties_departments` ( )
        BEGIN
            SELECT faculties.name AS name_faculty, departments.name AS name_departments
            FROM faculties, departments
            WHERE faculties.id = departments.faculty_id;
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
        Schema::dropIfExists(`kelompok6_read_faculties_departments`);
    }
};
