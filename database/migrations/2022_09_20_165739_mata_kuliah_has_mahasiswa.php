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
        Schema::create('mata_kuliah_has_mahasiswa', function (Blueprint $table) {
            $table->string('KODE_MK', (20));
            $table->foreign('KODE_MK')->references('KODE_MK')->on('mata_kuliah');
            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
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
        Schema::dropIfExists('mata_kuliah_has_mahasiswa');
    }
};
