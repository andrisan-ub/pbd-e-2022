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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok5_update_study_programs`;
        CREATE PROCEDURE `kelompok5_update_study_programs` (
            IN up_id bigint,
            IN up_department_id bigint,
            IN up_name varchar(1024)
            )
        BEGIN
            update study_programs set department_id = up_department_id, name = up_name
            where id = up_id;
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
