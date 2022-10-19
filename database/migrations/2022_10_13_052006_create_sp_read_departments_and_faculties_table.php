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
        
            $procedure = "DROP PROCEDURE IF EXISTS `sp_select_departments`;
                CREATE PROCEDURE `sp_select_departments` (IN idx int)
                BEGIN
                SELECT departments.id, departments.name FROM departments
                INNER JOIN faculties
                ON departments.faculty_id = faculties.id;
                END;";
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp_select_departments');
    }
};
