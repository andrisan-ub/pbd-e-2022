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
        Schema::create('sub_lembar_kerja', function (Blueprint $table) {
            $table->bigIncrements("id_sub_lembar_kerja");
            $table->string("deskripsi_sub_lembar_kerja");

            $table->unsignedBigInteger('id_lembar_kerja');
            $table->foreign("id_lembar_kerja")->references("id_lembar_kerja")->on("lembar_kerja");

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
        Schema::dropIfExists('sub_lembar_kerja');
    }
};
