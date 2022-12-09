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
        Schema::create('create_table_rekap_presensi', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pertemuan');
            $table->integer('rekap_presensi');
            $table->foreignId('id')->primary()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_table_rekap_presensi');
    }
};
