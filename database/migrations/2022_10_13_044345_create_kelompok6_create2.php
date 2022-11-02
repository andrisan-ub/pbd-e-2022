<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $store_procedure = "DROP PROCEDURE IF EXISTS `kelompok6_create_insert_course_classes`;
        CREATE PROCEDURE `kelompok6_create_insert_course_classes`(
            IN id BIGINT(20),
            IN course_id BIGINT(20),
            IN name VARCHAR(1024)

        )
        BEGIN
        insert into course_classes(id,course_id, name, thumbnail_img, class_code,creator_user_id)
        value (id,course_id,name,null,class_code,2);
        END";

        DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok6_create2');
    }
};
