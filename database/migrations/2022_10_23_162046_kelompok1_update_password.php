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
        $procedure = "DROP PROCEDURE IF EXISTS 'updatePasswordUser';
        CREATE PROCEDURE 'updatePasswordUser'(in_id int, in_name varchar(1024), in_password varchar(255))
        BEGIN
            UPDATE users SET password = in_password
            WHERE users.id = in_id
            AND users.name = in_name;
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
        Schema::dropIfExists('updatePasswordUser');
    }
};
