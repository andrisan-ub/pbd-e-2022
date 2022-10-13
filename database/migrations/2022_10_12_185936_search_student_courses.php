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
        //mencari student st di course co
        $procedure = "DROP PROCEDURE IF EXISTS `kel5_searchStudentCourses`;
        CREATE PROCEDURE `kel5_searchStudentCourses`(IN st VARCHAR(1024), IN co INT)
        BEGIN
            DECLARE temp, temp2 varchar(1024);
            SET temp = (
                    SELECT id
                    FROM course_classes
                    WHERE id = co
                );
            IF (temp) THEN
                SELECT course_classes.id, u.name
                FROM course_classes
                JOIN join_classes jc on course_classes.id = jc.course_class_id
                JOIN users u on u.id = jc.student_user_id
                WHERE course_classes.id = co AND u.name = st;
            ELSE
                set temp = 'Student tidak ada di kelas';
                SELECT temp;
            end if;
        END;";
  
        \DB::unprepared($procedure);
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
