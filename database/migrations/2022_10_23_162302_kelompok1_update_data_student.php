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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok1_updateDataUser`;
        CREATE PROCEDURE 'kelompok1_updateDataUser' (IN up_id, IN up_password)
        BEGIN
            UPDATE users SET password = up_password
            WHERE users.id = up_id;
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
        //
    }
};
