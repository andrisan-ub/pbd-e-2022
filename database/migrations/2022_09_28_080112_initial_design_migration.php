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
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->integer('llo_id');
            $table->foreign('llo_id')->references('id')->on('lesson_learning_outcome');
            $table->text('objective');
            $table->string('title',(2048));
            $table->boolean('is_group_assignment');
            $table->string('assignment_style', (1024));
            $table->text('description');
            $table->text('output_instruction');
            $table->text('submission_instruction');
            $table->text('deadline_instruction');
            $table->integer('class_id');
            $table->foreign('class_id')->references('id')->on('class');
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->timestamps();
        });
        
        Schema::create('faculty', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment');
        Schema::dropIfExists('faculty');
    }
};
