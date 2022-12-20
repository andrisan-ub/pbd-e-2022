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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_insertPost`;
        CREATE PROCEDURE `kelompok4_insertPost` (
            IN_ID INT(20),
            IN_ID_TOPIC INT(20),
            IN_CONTENT_POST VARCHAR(255),
            IN_CREATE_DATE_POST DATE
        )
        BEGIN
            INSERT INTO POST 
            VALUES (IN_ID_POST, IN_ID , IN_ID_TOPIC , IN_CONTENT_POST , IN_CREATE_DATE_POST);
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
        Schema::dropIfExists('kelompok4_procedure_insert_post');
    }
};
