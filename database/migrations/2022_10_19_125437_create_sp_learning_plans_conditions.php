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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_learning_plans_conditions`;
        CREATE PROCEDURE `sp_learning_plans_conditions` (IN id int)
        BEGIN
        DECLARE desc VARCHAR();
            IF learning_method = 'studi kasus' THEN
            SET desc = 'Mahasiswa mempelajari dan memahami materi sesuai dengan fenomena yang terjadi di sekitar';
            ELSE IF learning_method = 'ceramah' THEN
            SET desc = 'Mahasiswa memperhatikan penjelasan materi yang dipaparkan oleh dosen pengajar ';
            END IF;          
            SELECT desc;
            END;";
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp_learning_plans_conditions');
    }
};
