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
            $table->id();
            $table->string('kode_lk');
            $table->string('tujuan');
            $table->string('judul');
            $table->string('pengerjaan_tugas');
            $table->string('bentuk_tugas');
            $table->string('deskripsi');
            $table->string('bentuk_format_luaran');
            $table->string ('waktu_pengerjaan');
            $table->string('metode');
            $table->integer('bobot');

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
