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
        $procedure = "DROP PROCEDURE IF EXISTS `SP_INSERT_USER_SKM_POINT`;
        CREATE PROCEDURE SP_INSERT_USER_SKM_POINT(
            IN TBL VARCHAR(50),
            IN VAL TEXT
        )
        BEGIN
            SET @SQL = CONCAT("INSERT INTO ",TBL," VALUES (",VAL,");");
            PREPARE STAT FROM @SQL;
            EXECUTE STAT;
        END";

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
