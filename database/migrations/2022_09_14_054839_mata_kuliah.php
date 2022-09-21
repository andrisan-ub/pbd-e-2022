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
            $table->string('KODE_MK')->primary();
            $table->unsignedBigInteger('DOSEN_NIP');
            $table->foreign('DOSEN_NIP')->references('NIP')->on('dosen');
            $table->string('NAMA_MK', (45));
            $table->string('SIFAT', (20));
            $table->integer('SEMESTER');
            $table->integer('BOBOT_KREDIT');
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
