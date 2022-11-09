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
		        in up_syllabus_id bigint(20),
                in up_week_number int(11),
                in up_llo_id bigint(20),
                in up_study_material text,
                in up_learning_method text,
                in up_estimated_time varchar(1024),
                in up_created_at timestamp,
                in up_updated_at timestamp
            )
            BEGIN
		        update learning_plans set syllabus_id=up_syllabus_id where id=p_id;
                update learning_plans set week_number=up_week_number where id=p_id;
		        update learning_plans set llo_id=up_llo_id where id=p_id;
		        update learning_plans set study_material=up_study_material where id=p_id;
		        update learning_plans set learning_method=up_learning_method where id=p_id;
		        update learning_plans set estimated_time=up_estimated_time where id=p_id;		
		        update learning_plans set created_at=up_created_at where id=p_id;
		        update learning_plans set updated_at=up_updated_at where id=p_id;
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
