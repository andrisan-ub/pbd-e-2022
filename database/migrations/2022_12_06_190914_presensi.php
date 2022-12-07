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
            id_presensi bigint PRIMARY key,
            keterangan varchar(20),
            mata_kuliah varchar(255),
            sub_pembelajaran varchar(255),
            dosen_pengampu varchar(255),
            waktu_presensi date,
            id_user int,
            FOREIGN KEY (id_user)
                REFERENCES id(users)
        
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
