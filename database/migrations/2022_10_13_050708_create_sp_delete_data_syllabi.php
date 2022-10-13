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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_delete_data_syllabi`;
            CREATE PROCEDURE `Sp_delete_data_syllabi` (
                dr_id bigint(20)
            )
            BEGIN
                delete from syllabi
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
        Schema::dropIfExists('sp_delete_data_syllabi');
    }
};
