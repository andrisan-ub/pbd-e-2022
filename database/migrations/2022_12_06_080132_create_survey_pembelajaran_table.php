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
        Schema::create('survey_pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->text('pertanyaan');
            $table->text('jenis survey');
            $table->integer('skor');
            $table->text('saran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_pembelajaran');
    }
};
