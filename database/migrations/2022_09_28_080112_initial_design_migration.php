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
        Schema::create('learning_plan', function (Blueprint $table) {
            $table->id();
            $table->integer('week_number')->nullable();
            $table->varchar('title',2048)->nullable();
            $table->text('description')->nullable();
            $table->varchar('estimated_time',1024)->nullable();
            $table->integer('created_at');
            $table->integer('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_plan');
    }
};
