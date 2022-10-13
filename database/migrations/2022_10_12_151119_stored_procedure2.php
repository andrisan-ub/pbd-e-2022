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
        // Schema::create('stored_procedure2', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        //Update syllabi
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_updateSyllabi`;
                            CREATE PROCEDURE `kelompok4_updateSyllabi`(
                                IN p_id bigint(20),
                                IN p_course_id bigint(20),
                                IN up_title varchar(255),
                                IN up_author text,
                                IN p_head_of_study_program varchar(512)
                            )
                            BEGIN
                            UPDATE syllabi SET title = up_title, author = up_author
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
        Schema::dropIfExists('stored_procedure2');
    }
};
