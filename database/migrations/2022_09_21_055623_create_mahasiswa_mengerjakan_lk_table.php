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
        Schema::create('mahasiswa_mengerjakan_lk', function (Blueprint $table) {
            $table->unsignedBigInteger('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('kode_lk');
            $table->foreign("kode_lk")->references("kode_lk")->on("lembar_kerja")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_mengerjakan_lk');
    }
};
