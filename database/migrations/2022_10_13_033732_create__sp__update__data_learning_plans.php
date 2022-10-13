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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_update_data_learning_plans`;
            CREATE PROCEDURE `Sp_update_data_learning_plans` (
                in p_id bigint(20),
                in up_learning_method text
            )
            BEGIN
                update learning_plans set learning_method=up_learning_method
                where id=p_id;
            END;";
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp__update__data_learning_plans');
    }
};
