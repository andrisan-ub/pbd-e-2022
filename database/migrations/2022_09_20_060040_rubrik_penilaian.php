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
        Schema::create('rubrik_penilaian', function (Blueprint $table) {
            $table->integer('nim');
            $table->integer('poin');
            $table->integer('skala');
            $table->char('kode_cpmk');
            $table->char('kode_subcpmk');
            $table->char('kode_sublk');
            $table->char('kode_indikator');
            $table->mediumText('deskripsi');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrik_penilaian');
    }
};
