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
        Schema::create('lembar_kerja', function (Blueprint $table) {
            $table->bigIncrements("id_lembar_kerja");
            $table->string("jenis_lembar_kerja", 10);
            $table->unsignedBigInteger("id_sub_cpmk");
            $table->foreign("id_sub_cpmk")->references("id_sub_cpmk")->on("sub_cpmk")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('lembar_kerja');
    }
};
