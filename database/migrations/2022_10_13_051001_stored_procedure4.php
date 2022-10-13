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
        $k = "DROP PROCEDURE IF EXISTS `kelompok4_kondisiNamePoint`;
       CREATE PROCEDURE `kelompok4_kondisiNamePoint`()

       BEGIN

        DECLARE hasil varchar(20);

        IF sum(criteria_levels.point) > 5.00 THEN 
            SET hasil = 'A';
        ELSEIF sum(criteria_levels.point) > 3.00 THEN 
            SET hasil = 'B';
        ELSEIF sum(criteria_levels.point) > 1.00 THEN 
            SET hasil = 'C';
        ELSE
            SET hasil = 'ANDA TIDAK LULUS';
        END IF;


        SELECT student_user_id
        FROM student_grades sg
        JOIN users u
        ON u.id = sg.student_user_id

        JOIN criteria_levels cl 
        ON cl.id = sg.criteria_level_id
        
        group by u.name;
        

       END;
       ";
       
       DB::unprepared($k);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_procedure4');
    }
};
