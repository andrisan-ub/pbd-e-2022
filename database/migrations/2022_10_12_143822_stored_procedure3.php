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
        //Menghapus Value Dalam Tabel Join_Class
       $d = "DROP PROCEDURE IF EXISTS `kelompok4_deleteJoinClass`;
       CREATE PROCEDURE `kelompok4_deleteJoinClass`(
        dr_id bigint(20)
       )

       BEGIN
       DELETE FROM join_classes
       WHERE join_classes.id = dr_id;
       END;
       ";
       
       DB::unprepared($d);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_procedure3');
    }
};
