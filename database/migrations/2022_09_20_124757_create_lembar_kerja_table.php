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
            $table->string('Kode_LK')->primary();
            $table->string('Kode_SUB_CPMK');
            $table->string('Judul_Tugas');
            $table->foreign('Kode_SUB_CPMK')->references('Kode_SUB_CPMK')->on('sub_cpmk');     

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
