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
        Schema::create('lkm', function (Blueprint $table) {
            $table->id('kode_mk_lk')->primary;
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
        Schema::dropIfExists('lkm');
    }
};
