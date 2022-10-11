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

        $query = "drop procedure if exists  kelompok3_insert_criterion_level;
        CREATE PROCEDURE kelompok3_insert_criterion_level(IN criterion_id BIGINT(20), IN point DOUBLE(8,2), IN title VARCHAR(1024), IN description TEXT)
        begin 
            insert into criterion_level( criterion_id, point, title, description )
            value( criterion_id, point, title, description ); 
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
        // menampilkan data nama course, week number, id llo, description, study material, learning method, dan estimated time
        // dengan relasi 4 tabel
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_read_matriks`;
        create procedure kelompok3_read_matriks()
        begin
            select course.name, learning_plan.week_number, learning_plan.llo_id, lesson_learning_outcome.description, 
            learning_plan.study_material, learning_plan.learning_method, learning_plan.estimated_time
            from learning_plan
            join lesson_learning_outcome on lesson_learning_outcome.id = learning_plan.llo_id
            join syllabus on syllabus.id = learning_plan.syllabus_id
            join course on course.id = syllabus.course_id
            where llo_id = 2;
            end";
        DB::unprepared($procedure);

        //UPDATE
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_update_join_class`;
        create procedure kelompok3_update_join_class(in p_id bigint, in up_student_user_id bigint, in up_course_class_id bigint)
        begin
            update join_class set student_user_id = up_student_user_id, course_class_id = up_course_class_id
            where id = p_id;
        END";
        DB::unprepared($procedure);

        $query = "DROP PROCEDURE IF EXISTS `kelompok3_update_criterion_level`;
        create procedure kelompok3_update_criterion_level(in up_id bigint, in up_criterion_id bigint, in up_point double(8,2), in up_title varchar(1024), in up_description text)
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

        $query = "DROP PROCEDURE IF EXISTS `kelompok3_delete_criterion`;
        create procedure kelompok3_delete_criterion(in in_id bigint)
            begin
                delete from criterion where id = in_id;
            end";
        DB::unprepared($query);

        //CONDITION
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_condition_student_grade`;
        create procedure kelompok3_condition_student_grade(in assigment_id bigint)
            begin
                if assignment_id = 1 then
                    select * from student_grade;
                end if;
            end";
        DB::unprepared($query);

        $query = "drop procedure if exists `kelompok3_score_per_class`;
        create procedure kelompok3_score_per_class(in_user_id bigint, in_class_id bigint) 
        begin
            select u.id, u.name, 
        c.name as course, 
        ap.title as `nama tugas`, 
        sg.id as `sg.id`, 
        cc.id as `class id`, 
        cl.`point` as `nilai`, 
        c2.max_point as `nilai max`, 
        case 
            when (cl.`point`/c2.max_point) > 0.80 then 'A'
            when (cl.`point`/c2.max_point) > 0.75 then 'B+'
            when (cl.`point`/c2.max_point) > 0.69 then 'B'
            when (cl.`point`/c2.max_point) > 0.60 then 'C+'
            when (cl.`point`/c2.max_point) > 0.55 then 'C'
            when (cl.`point`/c2.max_point) > 0.50 then 'D+'
            when (cl.`point`/c2.max_point) > 0.44 then 'D'
            else 'E'
        end as `nilai huruf`
        from users u 
            inner join student_info si on si.id = u.id
            right join join_class jc on jc.student_user_id = si.id
            left join course_class cc on jc.course_class_id = cc.id
            left join course c on c.id = cc.course_id
            left join `assignment` a on a.course_class_id = cc.id
            left join assignment_plan ap on ap.id = a.assignment_plan_id 
            left join student_grade sg ON sg.assignment_id = a.id and si.id = sg.student_user_id
            left join criterion_level cl on cl.id = sg.criterion_level_id
            left join criterion c2 on c2.id = cl.criterion_id
            where u.id = in_user_id and cc.id = in_class_id;
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
        DB::unprepared("drop procedure if exists  kelompok3_insert_criterion_level");


        //READ
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_read_matriks`");


        //UPDATE
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_update_join_class`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_update_criterion_level`");

        //DELETE
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_delete_join_class`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_delete_criterion`");

        //CONDITION
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_condition_student_grade`");
        DB::unprepared("drop procedure if exists `kelompok3_score_per_class`");



        //LOOP


    }
};
