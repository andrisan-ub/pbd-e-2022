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
        //
        $procedure = "DROP PROCEDURE IF EXIST 'kelompok1_delete_data_students';
        CREATE PROCEDURE 'kelompok1_delete_data_students'(
            del_student_id varchar
            )
        BEGIN
	        DELETE FROM students
	        WHERE students.student_id = del_student_id;
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
        //
    }
};
