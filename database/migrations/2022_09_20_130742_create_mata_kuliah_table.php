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
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id('kode_matkul');
            //$table->foreign('dosen_nip')->references('nip')->on('dosen');
            $table->string('nama_matkul');
            $table->string('program_studi');
            $table->string('jurusan');
            $table->string('semester');
            $table->string('sks');
            $table->string('sifat');
            $table->string('deskripsi');
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
        Schema::dropIfExists('mata_kuliah');
    }
};
