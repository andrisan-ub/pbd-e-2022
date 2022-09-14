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
            $table->bigIncrements("id_sub_cpmk");
            $table->string("nama_sub_cpmk");
            $table->string("deskripsi_sub_cpmk");
            $table->unsignedBigInteger("id_cpmk");
            $table->foreign("id_cpmk")->references("id_cpmk")->on("cpmk")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('sub_cpmk');
    }
};
