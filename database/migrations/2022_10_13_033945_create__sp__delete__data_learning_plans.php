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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_delete_data_learning_plans`;
            CREATE PROCEDURE `Sp_delete_data_learning_plans` (
                dr_id bigint(20)
            )
            BEGIN
                delete from learning_plans 
                where id = dr_id;
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
        Schema::dropIfExists('_sp__delete__data_learning_plans');
    }
};
