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
        $procedure = "DROP PROCEDURE IF EXIST 'sp_update_criterias';
            CREATE PROCEDURE sp_UpdateCriterias(
                in p_id_llo_id bigint(20),
                in up_title varchar(1024)
            )
            begin
                update criterias set title = up_title
                where id = p_id_llo_id;
            END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp__update_criterias');
    }
};
