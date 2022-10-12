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
        
        //melihat jumlah siswa dengan course id dari i sampai n 
        $procedure = "DROP PROCEDURE IF EXISTS `kel5_getStudentCount`;
            CREATE PROCEDURE `kel5_getStudentCount` (IN n int, IN m INT)
            BEGIN
            WHILE (n <= m) DO
            SELECT cc.id, COUNT(*)
            FROM course_classes cc
            JOIN join_classes j on cc.id = j.course_class_id
            JOIN users u2 on j.student_user_id = u2.id
            JOIN student_data sd on u2.id = sd.id
            WHERE cc.id = n
            GROUP BY cc.id;
            SET n = n + 1;
            END WHILE;
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
