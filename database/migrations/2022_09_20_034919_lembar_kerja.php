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
        Schema::create('lembar_kerja', function (Blueprint $table) {
            $table->string('KODE_LK')->primary();
            $table->string('TUJUAN_TUGAS');
            $table->string('METODE_PENGUMPULAN');
            $table->string('PENGERJAAN_TUGAS');
            $table->string('BENTUK_DAN_FORMAT_LUARAN');
            $table->date('WAKTU_PENGERJAAN');
            $table->string('BENTUK_TUGAS');
            $table->string('DESKRIPSI_TUGAS');
            $table->string('JUDUL_TUGAS');
            $table->string('CPMK_KODE_CPMK');
            $table->string('CPL_KODE_CPL');
            $table->string('INDIKATOR_KODE_INDIKATOR');
            $table->string('RINCIAN_LK');
            $table->foreign('CPMK_KODE_CPMK')->references('KODE_CPMK')->on('cpmk');
            $table->foreign('CPL_KODE_CPL')->references('KODE_CPL')->on('cpl');
            $table->foreign('INDIKATOR_KODE_INDIKATOR')->references('KODE_INDIKATOR')->on('indikator');
            $table->foreign('RINCIAN_LK')->references('RINCIAN_LK')->on('kriteria_dan_bentuk_penilaian');
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
        Schema::dropIfExists('lembar_kerja');
    }
};
