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
        Schema::create('mahasiswa_mengambil_mata_kuliah', function (Blueprint $table) {
            $table->unsignedBigInteger('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('kode_mk');
            $table->foreign("kode_mk")->references("kode_mk")->on("mata_kuliah")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_mengambil_mata_kuliah');
    }
};
