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
        DB::unprepared('
        CREATE FUNCTION `exam_time`(
            end_time TIME,
            start_time TIME) 
            RETURNS time
            BEGIN
            DECLARE exam_time TIME;
            SET exam_time=end_time-start_time;
            RETURN exam_time;
            END        
             ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
        DROP FUNCTION `exam_time`');
    }
};
