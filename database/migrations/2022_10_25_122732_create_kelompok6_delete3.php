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
        $store_procedure = "DROP PROCEDURE IF EXISTS `kelompok6_delete3`;
        CREATE PROCEDURE `kelompok6_delete3`(IN `nim` VARCHAR(15))
        BEGIN
        DELETE FROM users, student_data
        JOIN users ON student_data.id = users.id
        WHERE id =
            (SELECT student_data.id
            FROM student_data
            WHERE student_data.student_id_number = nim);
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
        Schema::dropIfExists('kelompok6_delete3');
    }
};
