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
        Schema::create('cpmk', function (Blueprint $table) {
            $table->string('KODE_CPMK')->primary();
            $table->string('SUB_CPMK_KODE_SUB_CPMK');
            $table->foreign('SUB_CPMK_KODE_SUB_CPMK')->references('KODE_SUB_CPMK')->on('sub_cpmk');
            $table->string('DESKRIPSI_CPMK');
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
        Schema::dropIfExists('cpmk');
    }
};
