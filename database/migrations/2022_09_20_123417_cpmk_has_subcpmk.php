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
        Schema::create('cpmk_has_subcpmk', function (Blueprint $table) {
            $table->foreign('kode_cpmk') -> references('kode_cpmk') -> on ('cpmk');
            $table->foreign('kode_subcpmk') -> references('kode_subcpmk') -> on ('sub_cpmk');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
