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
        Schema::create('plan_schedule_times', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_schedule_id');
            $table->tinyInteger('hari');
            $table->time('jam_mulai');
            $table->time('jam_akhir');

            $table->foreign('plan_schedule_id')->references('id')->on('plan_schedules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_schedule_times');
    }
};
