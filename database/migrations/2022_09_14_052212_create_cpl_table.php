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
        Schema::create('cpl', function (Blueprint $table) {
            $table->bigIncrements("id_cpl");
            $table->unsignedBigInteger("id_mata_kuliah");
            $table->foreign("id_mata_kuliah")->references("id_mata_kuliah")->on("mata_kuliah")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("nama_cpl");
            $table->string("deskripsi_cpl");
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
        Schema::dropIfExists('cpl');
    }
};
