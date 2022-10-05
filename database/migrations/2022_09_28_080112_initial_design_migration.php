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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->varchar('email')->nullable();
            $table->timestamps('email_verified_at');
            $table->varchar('password', 255)->nullable();
            $table->varchar('remember_token', 100)->nullable();
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
    });
        
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
    });
        
        Schema::create('learning_plan', function (Blueprint $table) {
            $table->id();
            $table->integer('week_number')->nullable();
            $table->varchar('title',2048)->nullable();
            $table->text('description')->nullable();
            $table->varchar('estimated_time',1024)->nullable();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
            
        Schema::create('criterion', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1024)->nullable();
            $table->string('description', 1024)->nullable();
            $table->float('max_point')->nullable();
        });
        
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->integer('course_credit');
            $table->integer('lab_credit');
            $table->text('short_description');
            $table->string('minimal_requirement',1024);
            $table->text('study_material_summary');
            $table->text('learning_media');
            $table->enum('type',['mandatory','elective']);
            $table->integer('created_at');
            $table->integer('update_at');
            $table->bigInteger('study_program_id');
            $table->bigInteger('creator_user_id');
        });
        
        Schema::create('grading_plan', function (Blueprint $table) {
            $table->id();
            $table->foreign('learning_plan_id')->references('id')->on('learning_plan');
            $table->foreign('criterion_id')->references('id')->on('criterion');
        });    
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

        Schema::create('class', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1024);
            $table->string('thumbnail_img', 1024)->nullable();
            $table->string('class_code', 256)->nullable();
            $table->integer('created_at');
            $table->integer('updated_at');
        });

        Schema::create('study_program', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('assignment_id')->unsigned();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
            $table->timestamps();
        });

        Schema::create('table_lesson_learning_outcome', function (Blueprint $table) {
            $table->id();
            $table->integer('clo_id');
            $table->foreign('clo_id')->references('id')->on('course_learning_outcome');
            $table->integer('position')->nullable();
            $table->text('description')->nullable();
        });

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
        Schema::dropIfExists('users');
        Schema::dropIfExists('student');
        Schema::dropIfExists('learning_plan');
        Schema::dropIfExists('criterion');
        Schema::dropIfExists('course');
        Schema::dropIfExists('rubric');
        Schema::dropIfExists('assignment');
        Schema::dropIfExists('faculty');
        Schema::dropIfExists('class');
        Schema::dropIfExists('study_program');
    }
};
