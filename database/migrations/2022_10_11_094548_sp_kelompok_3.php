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
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_insert_join_classes`;
        create procedure kelompok3_insert_join_classes(in_students_id bigint, in_course_classes_id bigint)
        begin
            insert into join_classes(student_user_id, course_class_id) value(in_students_id, in_course_classes_id);
        end";
        DB::unprepared($query);

        $query = "drop procedure if exists  kelompok3_insert_criteria_levels;
        CREATE PROCEDURE kelompok3_insert_criteria_levels(IN criterion_id BIGINT(20), IN point DOUBLE(8,2), IN title VARCHAR(1024), IN description TEXT)
        begin 
            insert into criteria_levels( criteria_id, `point`, title, description )
            value( criterion_id, `point`, title, description ); 
        end";
        DB::unprepared($query);

        $query = "drop procedure if exists `kelompok3_insert_criterias`;
        create procedure kelompok3_insert_criterias(
            in id bigint, 
            in rubric_id bigint, 
            in llo_id bigint, 
            in title varchar(1024), 
            in description varchar(1024), 
            in max_point double(8,2)
        )
        begin
            insert into criterias (id, rubric_id, llo_id,title, description, max_point, created_at, updated_at) values (
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
            select courses.name, learning_plans.week_number, learning_plans.llo_id, lesson_learning_outcomes.description, 
            learning_plans.study_material, learning_plans.learning_method, learning_plans.estimated_time
            from learning_plans
            join lesson_learning_outcomes on lesson_learning_outcomes.id = learning_plans.llo_id
            join syllabi on syllabi.id = learning_plans.syllabus_id 
            join courses on courses.id = syllabi.course_id
            where llo_id = 2;
        end";
        DB::unprepared($procedure);

        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_read_course_user`;
        create procedure kelompok3_read_course_user()
        begin
            SELECT users.name as namaMhs, courses.name as namaMK, course_classes.name as classMK FROM users 
            join join_classes on join_classes.student_user_id = users.id 
            join course_classes on course_classes.id = join_classes.course_class_id
            join courses on courses.id = course_classes.course_id;
        end";
        DB::unprepared($procedure);

        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_sp_read_title_llo`;
        create procedure kelompok3_sp_read_title_llo()
        begin
            select rubrics.title, lesson_learning_outcomes.description
            from rubrics
            join criterias on criterias.rubric_id = rubrics.id
            join lesson_learning_outcomes on lesson_learning_outcomes.id = criterias.llo_id;
        end";
        DB::unprepared($procedure);

        //UPDATE
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_update_join_classes`;
        create procedure kelompok3_update_join_classes(in p_id bigint, in up_student_user_id bigint, in up_course_class_id bigint)
        begin
            update join_classes set student_user_id = up_student_user_id, course_class_id = up_course_class_id
            where id = p_id;
        END";
        DB::unprepared($procedure);

        $query = "DROP PROCEDURE IF EXISTS `kelompok3_update_criteria_levels`;
        create procedure kelompok3_update_criteria_levels(in up_id bigint, in up_criterion_id bigint, in up_point double(8,2), in up_title varchar(1024), in up_description text)
            begin
                update criteria_levels set criteria_id = up_criterion_id , `point` = up_point, title = up_title, description = up_description
                where id = up_id;
            end";
        DB::unprepared($query);

        //DELETE
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_delete_join_classes`;
        create procedure kelompok3_delete_join_classes(in su_id bigint, in cc_id bigint)
            begin
                delete from `join_classes` where student_user_id = su_id and course_class_id = cc_id;
            end";
        DB::unprepared($query);

        $query = "DROP PROCEDURE IF EXISTS `kelompok3_delete_student_grade`;
        create procedure kelompok3_delete_student_grade(in in_id bigint)
            begin
                delete from student_grade where id = in_id;
            end";
        DB::unprepared($query);

        $query = "DROP PROCEDURE IF EXISTS `kelompok3_delete_student_info`;
        CREATE PROCEDURE `kelompok3_delete_student_info`(IN `in_id` BIGINT(20) UNSIGNED)
            begin
                DELETE FROM student_info WHERE id = in_id;
                end";
        DB::unprepared($query);

        //CONDITION
        $query = "DROP PROCEDURE IF EXISTS `kelompok3_condition_student_grade`;
        create procedure kelompok3_condition_student_grade(in in_assigment_id bigint)
            begin
                if assignment_id = in_assignment_id then
                    select * from student_grade where 
                    assignment_id = in_assignment_id;
                end if;
            end";
        DB::unprepared($query);


        $query = "drop procedure if exists `kelompok3_score_per_class`;
        create procedure kelompok3_score_per_class(in_user_id bigint, in_class_id bigint) 
        begin
        select u.id, u.name, 
        c.name as course, 
        ap.title as `nama tugas`, 
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
            inner join student_data si on si.id = u.id
            right join join_classes jc on jc.student_user_id = si.id
            left join course_classes cc on jc.course_class_id = cc.id
            left join courses c on c.id = cc.course_id
            left join `assignments` a on a.course_class_id = cc.id
            left join assignment_plans ap on ap.id = a.assignment_plan_id 
            left join student_grades sg ON sg.assignment_id = a.id and si.id = sg.student_user_id
            left join criteria_levels cl on cl.id = sg.criteria_level_id
            left join criterias c2 on c2.id = cl.criteria_id
            where u.id = in_user_id and cc.id = in_class_id;
        end";
        DB::unprepared($query);

        $query = "DROP PROCEDURE IF EXISTS `kelompok3_condition_point_student`;
        create procedure kelompok3_condition_point_student()
            begin
                select u.name as nama_mahasiswa, c.name as nama_matkul, sum(cl.`point`) as nilai,
                case
                    when sum(cl.`point`) > 80 then 'A'
                    when sum(cl.`point`) > 75 then 'B+'
                    when sum(cl.`point`) > 69 then 'B'
                    when sum(cl.`point`) > 60 then 'C+'
                    when sum(cl.`point`) > 55 then 'C'
                    when sum(cl.`point`) > 50 then 'D+'
                    when sum(cl.`point`) > 44 then 'D'
                    else 'E'
                end as `nilai huruf`
                from student_grades  sg
                join users u on u.id = sg.student_user_id
                join criteria_levels cl on cl.id = sg.criteria_level_id
                join join_classes jc on jc.student_user_id = u.id
                join course_classes cc on cc.id = jc.course_class_id
                join courses c on c.id = cc.course_id
                group by u.name, c.name;
            end";
        DB::unprepared($query);

        // //LOOP

        //menampilkan jumlah pengguna, mahasiswa, dan non mahasiswa
        $query = "drop PROCEDURE if EXISTS kelompok3_number_of_users;
        create procedure kelompok3_number_of_users()
        begin 
            DECLARE cur_end, `jumlah mahasiswa`, `jumlah pengguna`, `u_id`, `sd_id` int;
            DECLARE cur_1 cursor for select u.id as `u_id`, sd.id as `sd_id` from users u left join student_data sd on u.id = sd.id;
            DECLARE continue handler for not found set cur_end=1;
            SET `jumlah mahasiswa` = 0, `jumlah pengguna` = 0;

            open cur_1;
            while cur_end is null DO
                if `u_id` is not null then 
                    set `jumlah pengguna` = `jumlah pengguna` + 1;
                end if;

                if `sd_id` is not null then 
                    set `jumlah mahasiswa` = `jumlah mahasiswa` + 1;
                end if;
                fetch cur_1 into `u_id`, `sd_id`;
            end while;
            close cur_1;
            select `jumlah pengguna`, `jumlah mahasiswa`, (`jumlah pengguna` - `jumlah mahasiswa`) as `jumlah non mahasiswa`;
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
        //CREATE
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_insert_join_classes`");
        DB::unprepared("drop procedure if exists  `kelompok3_insert_criteria_levels`");
        DB::unprepared("drop procedure if exists `kelompok3_insert_criterias`");


        //READ
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_read_matriks`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_read_course_user`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_sp_read_title_llo`");


        //UPDATE
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_update_join_classes`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_update_criteria_levels`");


        //DELETE
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_delete_join_classes`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_delete_student_grade`");
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_delete_student_info`");


        //CONDITION
        DB::unprepared("DROP PROCEDURE IF EXISTS `kelompok3_condition_student_grade`");
        DB::unprepared("drop procedure if exists `kelompok3_score_per_class`");
        DB::unprepared("drop procedure IF EXISTS `kelompok3_condition_point_student`");

        //LOOP
        DB::unprepared("drop PROCEDURE if EXISTS kelompok3_number_of_users");
    }
};
