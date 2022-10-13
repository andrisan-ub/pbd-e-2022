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
        // Schema::create('stored_procedure', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        //Update nama study programs
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_updateStudyPrograms`;
                            CREATE PROCEDURE `kelompok4_updateStudyPrograms`(
                                IN p_id bigint(20),
                                IN p_department_id bigint(20),
                                IN up_name varchar(255)
                            )
                            BEGIN
                            UPDATE study_programs SET name = up_name
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
        Schema::dropIfExists('stored_procedure');
    }
};
