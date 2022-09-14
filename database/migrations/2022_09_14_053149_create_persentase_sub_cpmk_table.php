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
        Schema::create('persentase_sub_cpmk', function (Blueprint $table) {
            $table->unsignedBigInteger("id_sub_cpmk");
            $table->foreign("id_sub_cpmk")->references("id_sub_cpmk")->on("sub_cpmk")->cascadeOnDelete()->cascadeOnUpdate();


            $table->unsignedBigInteger("id_lembar_kerja");
            $table->foreign("id_lembar_kerja")->references("id_lembar_kerja")->on("lembar_kerja")->cascadeOnDelete()->cascadeOnUpdate();


            $table->float('persentase', 2, 2);
            $table->primary(['id_lembar_kerja', 'id_sub_cpmk']);
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
        Schema::dropIfExists('persentase_sub_cpmk');
    }
};
