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
        $procedure = "DROP PROCEDURE IF EXIST 'sp_delete_criterias';
            CREATE PROCEDURE 'sp_DeleteCriterias'(
                dr_id bigint(20)
            )
            begin
                delete from criterias 
                where id = dr_id;
            END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp__delete');
    }
};
