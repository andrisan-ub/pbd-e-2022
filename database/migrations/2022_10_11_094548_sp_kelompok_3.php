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
        //CREATE
        $query = "DROP PROCEDURE IF EXISTS `insert_join_class`;
        create procedure insert_join_class(in student_user_id bigint, in course_class_id bigint)
            begin
                insert into join_class(student_user_id, course_class_id) value(student_user_id, course_class_id);
            end";
        DB::unprepared($query);

        //READ


        //UPDATE


        //DELETE
        $query = "DROP PROCEDURE IF EXISTS `delete_join_class`;
        create procedure delete_join_class(in su_id bigint, in cc_id bigint)
            begin
                delete from `join_class` where student_user_id = su_id and course_class_id = cc_id;
            end";
        DB::unprepared($query);

        //CONDITION


        //LOOP


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //CREATE
        DB::unprepared("DROP PROCEDURE IF EXISTS `insert_join_class`");

        //READ


        //UPDATE


        //DELETE
        DB::unprepared("DROP PROCEDURE IF EXISTS `delete_join_class`");

        //CONDITION


        //LOOP


    }
};
