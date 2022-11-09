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
        $procedure = "DROP PROCEDURE IF EXISTS `sp_criterias_looping`;
        CREATE PROCEDURE `sp_criterias_looping` (IN criteria_id int)
        BEGIN
             DECLARE i int;
             SET i = 0; 

             ulang:LOOP
                if i > criteria_id then
                    leave ulang;
                END if;
                SET i = i + 1;
                SELECT criteria_id, rubric_id, title, max_point FROM criterias 
                WHERE id = i;
             END loop;
        END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sp_criterias_looping');
    }
};
