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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_select_criterias`;
                CREATE PROCEDURE `sp_select_criterias` (IN idx int)
                BEGIN
                SELECT criterias.id, criterias.title FROM criterias
                INNER JOIN rubrics
                ON criterias.rubric_id = rubrics.id;
                END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_read_criterias_and_rubrics');
    }
};
