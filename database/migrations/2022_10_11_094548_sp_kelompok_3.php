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
        $query = "DROP PROCEDURE IF EXISTS `insert_join_class`;
        create procedure insert_join_class(in student_user_id bigint, in course_class_id bigint)
            begin
                insert into join_class(student_user_id, course_class_id) value(student_user_id, course_class_id);
            end";
        DB::unprepared($query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS `insert_join_class`");
    }
};
