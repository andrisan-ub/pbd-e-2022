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
        Schema::create('cpl', function (Blueprint $table) {
            $table->string('kode_cpl',10)->primary();
            $table->string('matkul_kode_matkul');
            $table->foreign('matkul_kode_matkul')->references('kode_matkul')->on('mata_kuliah');
            $table->string('materi');
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
        Schema::dropIfExists('cpl');
    }
};
