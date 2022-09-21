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
        Schema::create('prodi_has_mata_kuliah', function (Blueprint $table) {
            $table->unsignedBigInteger('PRODI_KODE_PRODI');
            $table->foreign('PRODI_KODE_PRODI')->references('KODE_PRODI')->on('program_studi');
            $table->string('MATA_KULIAH_KODE_MK', (20))->primary();
            $table->foreign('MATA_KULIAH_KODE_MK')->references('KODE_MK')->on('mata_kuliah');
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
        Schema::dropIfExists('prodi_has_mata_kuliah');
    }
};
