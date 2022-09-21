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
        Schema::create('rubrik_penilaian', function (Blueprint $table) {
            $table->string('ITEM_PENILAIAN')->primary();
            $table->integer('LEVEL_SKOR');
            $table->string('DESKRIPSI_LEVEL_SKOR');
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
        Schema::dropIfExists('rubrik_penilaian');
    }
};
