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
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_insert_join_class`;
        create procedure kelompok3_insert_join_class(in student_user_id bigint, in course_class_id bigint)
            begin
                insert into join_class(student_user_id, course_class_id) value(student_user_id, course_class_id);
            end";
        DB::unprepared($query);

        $query = "drop procedure if exists `kelompok3_insert_criterion`;
        create procedure kelompok3_insert_criterion(
            in id bigint, 
            in rubric_id bigint, 
            in llo_id bigint, 
            in title varchar(1024), 
            in description varchar(1024), 
            in max_point double(8,2)
        )
        begin
            insert into criterion(id, rubric_id, llo_id,title, description, max_point, created_at, updated_at) values (
                id, 
                rubric_id, 
                llo_id, 
                title, 
                description, 
                max_point,
                NOW(),
                null
            );
        end";
        DB::unprepared($query);
        
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_insert_join_class`;

        create procedure kelompok3_insert_criterion_level(
            in criterion_id,
            in point,
            in title,
            in description)
        begin
            insert into criterion_level(
               criterion_id,
                point,
                title,
                description
            ) value(
               criterion_id,
                point,
                title,
                description);
        end";
        DB::unprepared($query);

        //READ


        //UPDATE


        //DELETE
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_delete_join_class`;
        create procedure kelompok3_delete_join_class(in su_id bigint, in cc_id bigint)
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
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_insert_join_class`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_insert_criterion`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_insert_criterion_level`");

        //READ


        //UPDATE


        //DELETE
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_delete_join_class`");

        //CONDITION


        //LOOP


    }
};
