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
        Schema::create('indikator_has_rubrik_penilaian', function (Blueprint $table) {
            $table->string('INDIKATOR_KODE_INDIKATOR');
            $table->foreign('INDIKATOR_KODE_INDIKATOR')->references('KODE_INDIKATOR')->on('indikator');
            $table->string('ITEM_PENILAIAN');
            $table->foreign('ITEM_PENILAIAN')->references('ITEM_PENILAIAN')->on('rubrik_penilaian');
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
        Schema::dropIfExists('indikator_has_rubrik_penilaian');
    }
};
