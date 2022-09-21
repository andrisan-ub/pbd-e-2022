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
            $table->BigIncrements('indikator');
            $table->integer('skor');
            $table->string('kategori_penilaian');
            $table->char('clo',255);
            $table->char('llo',255);
            $table->integer('skor_per_indikator');
            $table->unsignedBigInteger('kode_lk');
            $table->foreign('kode_lk')->references('kode_lk')->on('lembar_kerja')->cascadeOnDelete()->cascadeOnUpdate();
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
