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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_sp_delete_table`;
        CREATE PROCEDURE `kelompok4_sp_delete_table` (
            IN TABEL VARCHAR(45),
            IN KOLOM_PK VARCHAR(45),
            IN VALUE_PK VARCHAR(45)
        )
        BEGIN
            SET @SQL=CONCAT('DELETE FROM ', TABEL, ' WHERE ', KOLOM_PK, '=', VALUE_PK);
            PREPARE STAT FROM @SQL;
            EXECUTE STAT;
        END;";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok4_sp_delete_table');
    }
};
