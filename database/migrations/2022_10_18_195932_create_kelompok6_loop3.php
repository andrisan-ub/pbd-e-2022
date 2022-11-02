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
        $store_procedure = "DROP PROCEDURE IF EXISTS `kelompok6_looping3`;
        CREATE PROCEDURE `kelompok6_looping3`(
            IN id BIGINT(20),
            IN name VARCHAR(1024)
         )
    BEGIN
    DECLARE i INT;
    SET i =0;
    WHILE i < 5 DO
    insert into faculties(id, name)
    value (id,name);
    SET id = id+1;
    SET i =i+1;
    SET name = CONCAT(name, i, ' ');
    END WHILE;
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
        Schema::dropIfExists('kelompok6_loop3');
    }
};
