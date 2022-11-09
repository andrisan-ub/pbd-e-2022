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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_insert_faculties`;
            CREATE PROCEDURE `sp_insert_faculties` (
                in_id bigint(20),
                in_name varchar(255)
            )
            BEGIN
                insert into faculties
                values(in_id, in_name);
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
        Schema::dropIfExists('sp_insert_faculties');
    }
};
