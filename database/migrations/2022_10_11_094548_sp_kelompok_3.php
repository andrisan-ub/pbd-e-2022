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
        
       

        //READ


        //UPDATE
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_sp_update_join_class`;
        create procedure kelompok1_sp_update_join_class(in p_id bigint, in up_student_user_id bigint, in up_course_class_id bigint)
        begin
            update join_class set student_user_id = up_student_user_id, course_class_id = up_course_class_id
            where id = p_id;
        END";
        DB::unprepared($procedure);

        $query = "DROP PROCEDURE IF EXIST 'kelompok3_insert_criterion_level';
        create procedure kelompok3_insert_criterion_level(in up_id bigint, in up_criterion_id bigint, in up_point double(8,2), in up_title varchar(1024), in up_description text)
            begin
                update criterion_level set criterion_id = up_criterion_id , point = up_point, title = up_title, description = up_description
                where id = up_id;
            end";
        DB::unprepared($query);

        //DELETE
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_delete_join_class`;
        create procedure kelompok3_delete_join_class(in su_id bigint, in cc_id bigint)
            begin
                delete from `join_class` where student_user_id = su_id and course_class_id = cc_id;
            end";
        DB::unprepared($query);

        $query = "DROP PROCEDURE IF EXIST 'kelompok3_criterion'
        create procedure kelompok3_criterion(in del_title varchar(1024))
            begin
                delete from criterion
                where title = del_title;
            end";
        DB::unprepared($query);

        //CONDITION
        $query = "DROP PROCEDURE IF EXIST 'kelompok3_condition_student_grade'
        create procedure kelompok3_condition_student_grade(in assigment_id bigint)
            begin
                if assignment_id = 1 then
                    select * from student_grade;
                end if;
            end";
        DB::unprepared($query);


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
        

        //READ


        //UPDATE


        //DELETE
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_delete_join_class`");

        //CONDITION


        //LOOP


    }
};
