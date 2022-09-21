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
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id('KODE_JURUSAN');
            $table->unsignedBigInteger('FAKULTAS_KODE_FAKULTAS');
            $table->foreign('FAKULTAS_KODE_FAKULTAS')->references('KODE_FAKULTAS')->on('fakultas');
            $table->string('NAMA_JURUSAN',(45));
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
        Schema::dropIfExists('jurusan');
    }
};
