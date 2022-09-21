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
            $table->bigInteger('dosen_nip');
            $table->foreign('dosen_nip')->references('nip')->on('dosen');
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
