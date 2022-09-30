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
        Schema::create('table_lesson_learning_outcome', function (Blueprint $table) {
            $table->id();
            $table->integer('clo_id');
            $table->foreign('clo_id')->references('id')->on('course_learning_outcome');
            $table->integer('position')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_lesson_learning_outcome');
    }
};
