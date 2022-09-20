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
        Schema::create('kelas_has_mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('nip');
            $table->foreign('nip')->references('nip')->on('dosen')->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['id_kelas','nim']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_has_mahasiswa');
    }
};
