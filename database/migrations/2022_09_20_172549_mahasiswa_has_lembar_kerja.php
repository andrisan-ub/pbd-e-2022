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
        Schema::create('mahasiswa_has_lembar_kerja', function (Blueprint $table) {
            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
            $table->string('KODE_LK',(20));
            $table->foreign('KODE_LK')->references('KODE_LK')->on('lembar_kerja');
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
        Schema::dropIfExists('mahasiswa_has_lembar_kerja');
    }
};
