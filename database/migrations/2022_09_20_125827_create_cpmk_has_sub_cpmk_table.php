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
        Schema::create('cpmk_has_sub_cpmk', function (Blueprint $table) {
            $table->string('kode_sub_cpmk')->unsigned();
            $table->string('kode_cpmk')->unsigned();

            $table->foreign('kode_sub_cpmk') ->references('kode_sub_cpmk') -> on ('sub_cpmk');
            $table->foreign('kode_cpmk') ->references('kode_cpmk') -> on ('cpmk');
            
            $table->primary(['kode_sub_cpmk','kode_cpmk']);
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
        Schema::dropIfExists('cpmk_has_sub_cpmk');
    }
};
