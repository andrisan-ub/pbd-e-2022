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
        Schema::create('sub_cpmk', function (Blueprint $table) {
            $table->bigIncrements('kode_sub_cpmk');
            $table->float('bobot_sub_cpmk');
            $table->integer('nilai_sub_cpmk');
            $table->unsignedBigInteger('kode_cpmk');
            $table->foreign('kode_cpmk')->references('kode_cpmk')->on('cpmk')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_cpmk');
    }
};
