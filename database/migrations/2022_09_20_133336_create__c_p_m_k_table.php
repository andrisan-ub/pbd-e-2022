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
        Schema::create('_c_p_m_k', function (Blueprint $table) {
            $table->increments('id_cpmk');
            $table->varchar('bobot_nilai',10);
            $table->varchar('nama_cpmk',5);
            $table->varchar('kode_llo',5);
            $table->varchar('indikator',100);
            $table->varchar('nilai_mk_huruf',5);
            $table->integer('nilai_angka');
            $table->varchar('skor_kategori',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_c_p_m_k');
    }
};
