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
        //
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok5_update_rubrics`;
            CREATE PROCEDURE `kelompok5_update_rubrics` (
                IN up_id bigint,
                IN up_assignment_plan_id bigint,
                IN up_title varchar(1024),
                IN up_created_at timestamp,
                IN up_updated_at timestamp
                )
            BEGIN
                update rubrics set assignment_plan_id = up_assignment_plan_id, 
                    title = up_title, 
                    created_at = up_created_at, 
                    updated_at = up_updated_at 
                where id = up_id;
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
