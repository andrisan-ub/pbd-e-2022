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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok5_deleteDepartments`;
        CREATE PROCEDURE `kelompok5_deleteDepartments` (IN departmentsId INT)
        BEGIN
            DELETE FROM departments
            WHERE id = departmentsId;
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
