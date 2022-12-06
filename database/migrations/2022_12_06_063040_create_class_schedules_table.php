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
        Schema::create('class_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_class_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('start_id');
            $table->unsignedBigInteger('end_id');
            $table->timestamps();

            
            $table->foreign('course_class_id')->references('id')->on('course_classes');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('day_id')->references('id')->on('days');
            $table->foreign('start_id')->references('id')->on('start_times');
            $table->foreign('end_id')->references('id')->on('end_times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_schedules');
    }
};
