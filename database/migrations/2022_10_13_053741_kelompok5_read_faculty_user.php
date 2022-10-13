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

        $procedure = "DROP PROCEDURE IF EXISTS `kelompok5_read_faculty_user`;
            CREATE PROCEDURE `kelompok5_read_faculty_user`()
            BEGIN
            SELECT f.id, f.name, sp.name  FROM faculties f
            JOIN departments d ON f.id = d.faculty_id
            JOIN study_programs sp ON d.id = sp.department_id;
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
