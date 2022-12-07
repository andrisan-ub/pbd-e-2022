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
        $procedure = "DROP PROCEDURE IF EXISTS `Sp_InsertTable`;
            CREATE PROCEDURE `Sp_InsertTable` (
                in tbl Varchar(50),
	            in val text
            )
            begin
	        set @sql=concat ("insert into ",tbl, " values (", val,");");
	        prepare stat from @sql;
	        execute stat;
        end";

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sp__insert');
    }
};
