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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
};
