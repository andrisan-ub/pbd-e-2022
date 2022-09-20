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
        Schema::create('nilai_mahasiswa', function (Blueprint $table) {
            $table->unsignedInteger("nilai");


            $table->unsignedBigInteger('id_lembar_kerja');
            $table->foreign("id_lembar_kerja")->references("id_lembar_kerja")->on("lembar_kerja");


            $table->unsignedBigInteger('nip');
            $table->foreign("nip")->references("nip")->on("dosen");


            $table->unsignedBigInteger('nim');
            $table->foreign("nim")->references("nim")->on("mahasiswa");
            $table->primary(['id_lembar_kerja', 'nip', 'nim']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_mahasiswa');
    }
};
