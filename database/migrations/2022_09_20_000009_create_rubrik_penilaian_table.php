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
            $table->text('kode_indikator')->primary();
            $table->integer('poin');
            $table->integer('skala');
            $table->text('deskripsi');
            $table->bigInteger('nip');
            $table->foreign('nip')->references('nip')->on('dosen');
            $table->text('kode_lk');
            $table->foreign('kode_lk')->references('kode_lk')->on('lembar_kerja');
            $table->bigInteger('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
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
