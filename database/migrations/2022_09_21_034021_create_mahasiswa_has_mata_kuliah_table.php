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
        Schema::create('mahasiswa_has_mata_kuliah', function (Blueprint $table) {
            $table->bigInteger('mahasiswa_nim');
            $table->bigInteger('mata_kuliah_kode_matkul');
            $table->foreign('mahasiswa_nim')->references('nim')->on('mahasiswa');
            $table->foreign('mata_kuliah_kode_matkul')->references('kode_matkul')->on('mata_kuliah');
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
        Schema::dropIfExists('mahasiswa_has_mata_kuliah');
    }
};
