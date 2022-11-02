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
        $store_procedure = "DROP PROCEDURE IF EXISTS `kelompok6_tmpl2`;
        CREATE PROCEDURE `kelompok6_tmpl2`(
        IN id BIGINT(20),
        IN faculty_id BIGINT(20),
        IN name VARCHAR(1024)
         )
    BEGIN
    insert into departments(id, faculty_id, name)
    value (id,faculty_id,name);
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
         Schema::dropIfExists('kelompok6_tmpl2');
    }
};
