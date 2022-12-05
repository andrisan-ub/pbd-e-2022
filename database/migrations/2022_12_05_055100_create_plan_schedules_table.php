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
        Schema::create('plan_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_data_id');
            $table->string('program_studi', 255);
            $table->string('kelas', 4);
            $table->string('kode', 20);
            $table->string('mata_kuliah', 255);
            $table->year('tahun_kurikulum');
            $table->tinyInteger('sks');

            $table->timestamps();
            $table->foreign('student_data_id')->references('id')->on('student_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_schedules');
    }
};
