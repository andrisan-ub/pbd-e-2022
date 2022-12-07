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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_finalproject_cursor_totalsks`;
        CREATE PROCEDURE kelompok3_finalproject_cursor_totalsks(in in_sd bigint)
        BEGIN
        declare c_end int;
        declare c_user_name varchar(1024);
        declare total_sks, c_sks double;
        declare cur_1 cursor for select u.name, ps.sks
            from plans p 
            join student_data sd on sd.id = p.student_data_id 
            join users u on u.id = sd.id
            join plan_schedules ps on ps.id = p.plan_schedule_id
            where p.student_data_id = in_sd;
        declare continue handler for not found set c_end=1;
        set total_sks = 0, c_sks = 0;
        open cur_1;
        while c_end is null do
            set total_sks = total_sks+c_sks;
            fetch cur_1 into c_user_name, c_sks;
        end while;
        close cur_1;
        select c_user_name as `Nama Mahasiswa`, total_sks as `Total SKS`;
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
        Schema::dropIfExists('kelompok3_finalproject_cursor_totalsks');
    }
};
