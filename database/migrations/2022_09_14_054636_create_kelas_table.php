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
        Schema::create('kelas', function (Blueprint $table) {
            $table->bigIncrements('id_kelas');
            $table->string('nama_kelas');
            $table->unsignedBigInteger('id_mata_kuliah');
            $table->foreign('id_mata_kuliah')->references('id_mata_kuliah')->on('mata_kuliah')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('nip');
            $table->foreign('nip')->references('nip')->on('dosen')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('kelas');
    }
};
