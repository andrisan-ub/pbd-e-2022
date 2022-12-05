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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok5_read_assignment`;
            CREATE PROCEDURE `kelompok5_read_assignment`()
            BEGIN
            SELECT *  FROM courses c
            JOIN course_classes cc ON c.id = cc.course_id
            JOIN assignments a ON cc.id = a.course_class_id
            WHERE c.type = 'mandatory';
            END;";
  
        \DB::unprepared($procedure);
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
