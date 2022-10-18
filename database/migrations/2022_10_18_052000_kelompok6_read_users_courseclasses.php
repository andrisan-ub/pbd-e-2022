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
        $procedure = "DROP PROCEDURE IF EXISTS `read_users_courseclasses`;
        CREATE PROCEDURE `read_users_courseclasses` ( )
        BEGIN
            SELECT users.id AS id_users, users.name AS name_users, course_classes.name AS name_course_classes
            FROM users, course_classes
            WHERE users.id = course_classes.creator_user_id;
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
        Schema::dropIfExists(`kelompok6_read_users_courseclasses`);
    }
};
