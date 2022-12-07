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
        //SP - Delete survey
        $procedure_delete = "DROP PROCEDURE IF EXIST 'delete_survey';
        CREATE PROCEDURE 'delete_survey'(
            IN dr_id bigint(20)
        )
        begin
            DELETE FROM survey_pembelajaran 
            WHERE id = dr_id;
        END;";

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delete_survey');
    }
};
