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
        //mencari study program berdasarkan id
        //mencari student dengan nilai n
        $procedure = "DROP PROCEDURE IF EXISTS `kel5_searchStudryProgram`;
        CREATE PROCEDURE `kel5_searchStudryProgram`(IN n INT)
    BEGIN
    DECLARE temp VARCHAR(1024);
    SET temp = (
        SELECT study_programs.id
        FROM study_programs
        WHERE study_programs.id = spID
        );
    IF(temp) THEN
        SELECT f.name AS 'Faculties Name', s.name AS 'Study Program Name'
        FROM faculties f
        JOIN pbd.departments d on f.id = d.faculty_id
        JOIN study_programs s on d.id = s.department_id
        WHERE s.id = spID;
    ELSE
        SET temp = 'Program studi tidak ada';
        SELECT temp;
    end if;
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
