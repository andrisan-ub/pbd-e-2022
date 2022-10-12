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
        //menampilkan fakultas beserta departemennya berdasarkan nama fakultas
        $procedure = "DROP PROCEDURE IF EXISTS `kel5_setFacultyDepartment`;
            CREATE PROCEDURE `kel5_getFacultyDepartment` (IN fname VARCHAR, IN dname VARCHAR, IN dupdate VARCHAR)
            BEGIN
            DECLARE tempName VARCHAR;
                temPname(
                    SELECT department.name() 
                    FROM department
                    WHERE department.name = dname
                )

                IF (department.name != dupdate) THEN
                UPDATE department
                SET department.name = 
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
