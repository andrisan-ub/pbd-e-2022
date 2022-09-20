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
        Schema::create('rubrik', function (Blueprint $table) {
            $table->string('Kode_CPMK');
            $table->string('Kode_SUB_CPMK');
            $table->string('Kode_LK');
            $table->string('Indikator');
            $table->float('Score');
            $table->foreign('Kode_CPMK')->references('Kode_CPMK')->on('CPMK');
            $table->foreign('Kode_LK')->references('Kode_LK')->on('Lembar_Kerja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrik');
    }
};
