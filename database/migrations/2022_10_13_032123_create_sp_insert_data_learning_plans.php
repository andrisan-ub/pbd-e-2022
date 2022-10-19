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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_insert_data_learning_plans`;
            CREATE PROCEDURE `Sp_insert_data_learning_plans` (
                in_id bigint(20),
                in_syllabus_id bigint(20),
                in_week_number int(11),
                in_llo_id bigint(20),
                in_study_material text,
                in_learning_method text,
                in_estimated_time varchar(1024),
                in_created_at timestamp,
                in_updated_at timestamp
            )
            BEGIN
                insert into learning_plans
                values(in_id, in_syllabus_id, in_week_number, in_llo_id, in_study_material, in_learning_method, in_estimated_time, in_created_at, in_updated_at);
            END;";
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp__insert__data_learning_plans');
    }
};
