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
        Schema::create('nilai_mk', function (Blueprint $table) {
            $table->id('ID_NILAI')->primary();
            $table->integer('TOTAL_NILAI');
            $table->varchar('NILAI_LK01', 20);
            $table->integer('NILAI_LK01');
            $table->integer('NILAI_LK02');
            $table->integer('NILAI_LK03');
            $table->integer('NILAI_LK04');
            $table->integer('NILAI_UTS');
            $table->integer('NILAI_UAS');

            $table->foreignId('dosen_NID')->nullable();
            $table->foreign('dosen_NID')->references('NID')->on('dosen');
            $table->foreignId('rubrik_penilaian_id_rubrik')->nullable();
            $table->foreign('rubrik_penilaian_id_rubrik')->references('id_rubrik')->on('rubrik_penilaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_mk');
    }
};
