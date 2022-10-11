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
        //melihat jumlah departemen yang dimiliki sebuah fakultas, dari fakultas src sampai fakultas des
        $procedure = "DROP PROCEDURE IF EXISTS `whileFacultyDepartment`;
            CREATE PROCEDURE `whileFacultyDepartment` (IN src INT, IN des INT)
            BEGIN
            DECLARE i,j INT;
            SET i = src;
            SET j = des;
                WHILE (i <= j) DO
                SELECT faculty.name AS 'Fakultas', COUNT(*) AS 'Jumlah Departemen'
                FROM faculty, department
                WHERE faculty.id = department.faculty_id AND faculty.id = i
                GROUP BY  faculty.name;
                SET i = i + 1;
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
