<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // IMPLEMENTASI FUNCTION
        DB::unprepared('
        drop function if exists `durasi`;

        create function durasi (mulai time, akhir time) 
        returns varchar(1024)
        begin
            declare durasi time;
            declare jam, menit, detik, con varchar(1024);
            set durasi = timediff(akhir, mulai);
            
            set jam = substring(durasi, 2,1);
            set menit = substring(durasi, 4,2);
            if jam="0" then 
                set con = concat(menit, " menit");
            else 
                set con = concat(jam, " jam ", menit, " menit");
            end if;
            return con;
        end
        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS `durasi`;");
    }
};
