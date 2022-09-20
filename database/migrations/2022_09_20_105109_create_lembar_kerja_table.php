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
            $table->bigIncrements('kode_lk');
            $table->string('judul_tugas');
            $table->char('tujuan_tugas', 255);
            $table->date('waktu_pengerjaan');
            $table->integer('nilai_lk');
            $table->string('bentuk_tugas');
            $table->string('metode_pengumpulan');
            $table->char('pengerjaan_tugas');
            $table->unsignedBigInteger('kode_sub_cpmk');
            $table->foreign('kode_sub_cpmk')->references('kode_sub_cpmk')->on('sub_cpmk')->cascadeOnDelete()->cascadeOnUpdate();
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
