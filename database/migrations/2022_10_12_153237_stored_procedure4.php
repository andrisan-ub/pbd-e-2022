<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        // Schema::create('stored_procedure4', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        //Menampilkan nama 
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_updateFaculties`;
                            CREATE PROCEDURE `kelompok4_updateFaculties`(
                                IN p_id bigint(20),
                                IN up_name varchar(255)
                            )
                            BEGIN
                            UPDATE faculties SET name = up_name
                            WHERE id = p_id;
                            END;";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_procedure4');
    }
};
