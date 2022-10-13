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
        $procedure = "DROP PROCEDURE IF EXIST 'sp_insert_criterias';
            CREATE PROCEDURE `sp_insertCriterias`(
                in_id bigint,
                in_rubric_id bigint,
                in_llo_id bigint,
                in_title varchar(1024),
                in_description varchar(1024),
                in_max_point double,
                in_created_at timestamp,
                in_updated_at timestamp
        )
            BEGIN
                INSERT INTO criterias  
                VALUES (in_id, in_rubric_id, in_llo_id, in_title, in_description, 
                        in_max_point, in_created_at, in_updated_at);
            END;";         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp__insert_criterias');
    }
};
