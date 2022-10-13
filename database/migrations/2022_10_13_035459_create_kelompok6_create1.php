<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $store_procedure = "DROP PROCEDURE IF EXISTS `kelompok6_tmplmhsA_classid`;
        CREATE PROCEDURE `kelompok6_tmplmhsA_classid`()
        BEGIN
        SELECT name,course_class_id FROM `users` join join_classes on users.id=join_classes.id 
        WHERE name LIKE 'A%';
        END";

        DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok6_create1');
    }
};
