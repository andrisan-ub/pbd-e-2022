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
        Schema::create('bobot_penilaian', function (Blueprint $table) {
            $table->string('Kode_SUB_CPMK');
            $table->smallInteger('Bobot_per_SUB_CPMK');
            $table->integer('Bobot');
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
        Schema::dropIfExists('bobot_penilaian');
    }
};
