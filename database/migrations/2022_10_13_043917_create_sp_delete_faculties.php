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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_delete_faculties`;
            CREATE PROCEDURE `sp_delete_faculties` (
                in_dr_id bigint(20),
                in_name varchar(255)
            )
            BEGIN
                delete from faculties
                where id = dr_id;
            END;";

        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_delete_faculties');
    }
};