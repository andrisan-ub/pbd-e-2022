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
        //IMPLEMENTASI DYNAMIC SQL
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_finalproject_insert_m2m`;
        create procedure kelompok3_finalproject_insert_m2m(in m2m varchar(64), in id bigint, in id2 bigint)
        begin 
	        set @st = CONCAT('INSERT INTO ', m2m ,' VALUE (', id ,', ',id2,');');
	        prepare stmt from @st;
	        execute stmt;
	        deallocate prepare stmt;
        end;";
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_finalproject_insert_m2m`;");
    }
};
