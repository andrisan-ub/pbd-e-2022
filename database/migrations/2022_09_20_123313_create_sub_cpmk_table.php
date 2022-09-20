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
            $table->string('Kode_SUB_CPMK')->primary();
            $table->string('Kode_CPMK');
            $table->text('Capaian');             
            $table->foreign('Kode_CPMK')->references('Kode_CPMK')->on('cpmk');             

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
