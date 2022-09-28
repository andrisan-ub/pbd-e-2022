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
        Schema::create('grading_plan', function (Blueprint $table) {
            $table->id();
            $table->foreign('learning_plan_id')->references('id')->on('learning_plan');
            $table->foreign('criterion_id')->references('id')->on('criterion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_program');
    }
};
