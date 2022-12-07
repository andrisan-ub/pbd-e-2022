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
        $store_procedure = "DROP PROCEDURE IF EXISTS `update_days_class_schedules`;
        CREATE PROCEDURE `update_days_class_schedules`(
            
            IN TBL VARCHAR(50),
            IN COL_NAME VARCHAR(50),
            IN VAL_DAT TEXT,
            IN COL_PK VARCHAR(50),
            IN VAL_PK VARCHAR(50)
        )
        BEGIN
        SET @SQL=CONCAT('UPDATE ',TBL,' SET ',COL_NAME,'=',VAL_DAT, ' WHERE ', COL_PK,'=',VAL_PK);
        PREPARE STAT FROM @SQL;
        EXECUTE STAT;

        SELECT d.name AS Day, cc.name AS Course,r.name AS room,s.time AS Start,e.time AS End FROM `class_schedules` cs 
        JOIN course_classes cc ON cs.course_class_id=cc.id 
        JOIN rooms r ON cs.room_id=r.id 
        JOIN days d ON cs.day_id=d.id 
        JOIN start_times s ON cs.start_id=s.id 
        JOIN end_times e ON cs.end_id=e.id;
        END";

        DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_sql_update_days_class_schedules');
    }
};
