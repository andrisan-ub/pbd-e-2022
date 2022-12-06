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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok3_finalproject_menampilkan_plan_schedule`;
        CREATE PROCEDURE kelompok3_finalproject_menampilkan_plan_schedule(in in_sd int)
        BEGIN
            select u.name, ps.kelas, ps.mata_kuliah, ps.sks, pst.hari, concat(pst.jam_mulai, '-', pst.jam_akhir) as jam
            from plans p 
            join student_data sd on sd.id = p.student_data_id 
            join users u on u.id = sd.id
            join plan_schedules ps on ps.id = p.plan_schedule_id
            join plan_schedule_times pst on pst.plan_schedule_id = ps.id 
            where p.student_data_id = in_sd
            order by pst.hari asc;
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
        Schema::dropIfExists('kelompok3_finalproject_menampilkan_plan_schedule');
    }
};
