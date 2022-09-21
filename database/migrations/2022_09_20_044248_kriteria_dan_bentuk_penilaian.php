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
        Schema::create('kriteria_dan_bentuk_penilaian', function (Blueprint $table) {
            $table->string('RINCIAN_LK',(10))->primary();
            $table->string('BENTUK');
            $table->string('KRITERIA');
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
        Schema::dropIfExists('kriteria_dan_bentuk_penilaian');
    }
};
