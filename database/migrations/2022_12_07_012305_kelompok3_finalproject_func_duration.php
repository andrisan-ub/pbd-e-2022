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
        returns time
        begin
            declare durasi time;
            set durasi = timediff(akhir, mulai) ;
            return durasi;
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
