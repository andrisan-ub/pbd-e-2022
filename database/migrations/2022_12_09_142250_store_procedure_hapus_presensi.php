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
        $procedure ="DROP PROCEDURE IF EXISTS 'hapusPresensi';
        CREATE PROCEDURE 'hapusPresensi' (dr_sub_pembelajaran varchar (255))
            
            BEGIN
             DELETE from presensi
                where sub_pembelajaran = dr_sub_pembelajaran;
            END;";

            //DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hapusPresensi');
    }
};
