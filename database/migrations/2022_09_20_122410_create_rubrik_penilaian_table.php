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
            $table->increments('id_rubrik');
            $table->char('clo', 10);
            $table->char('llo', 10);
            $table->char('indikator', 45);
            $table->char('skor_indikator', 10);

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
