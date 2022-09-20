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
        Schema::create('cpl_has_cpmk', function (Blueprint $table) {
            $table->foreign('kode_cpl')->references('kode_cpl')->on('cpl') ;
            $table->foreign('kode_cpmk')->references('kode_cpmk')->on('cpmk');
            

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
        Schema::dropIfExists('cpl_has_cpmk');
    }
};
