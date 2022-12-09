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
        Schema::create('presensi', function (Blueprint $table) {
            $table-> id();
            $table-> string('keterangan');
            $table-> string('mata_kuliah'); 
            $table-> string('sub_pembelajaran');
            $table-> string('dosen_pengampu'); 
            $table-> timestamp('waktu_presensi');
            $table-> integer('id_user')->unique(); 
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
        Schema::dropIfExists('presensi');
    }
};
