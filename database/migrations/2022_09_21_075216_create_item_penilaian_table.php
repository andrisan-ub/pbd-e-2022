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
        Schema::create('item_penilaian', function (Blueprint $table) {
            $table->string('teori');
            $table->string('praktik');
            $table->string('kode_indikator');
            $table->foreign('kode_indikator')->references('kode_indikator')->on('rubrik_penilaian');
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
        Schema::dropIfExists('item_penilaian');
    }
};
