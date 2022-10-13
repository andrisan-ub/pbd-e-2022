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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_update_faculties`;
            CREATE PROCEDURE `sp_update_faculties` (
                in_p_id bigint(20),
                in_name varchar(255)
            )
            BEGIN
                update faculties set name
                where id=p_id;
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
        Schema::dropIfExists('sp_update_faculties');
    }
};
