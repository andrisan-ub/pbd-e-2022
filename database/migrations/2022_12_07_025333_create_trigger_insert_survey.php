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
        ("CREATE TRIGGER `insert_survey` 
        AFTER INSERT ON `survey_pembelajaran` 
        FOR EACH ROW INSERT INTO survey_history 
        VALUES(NULL, NEW.id, 'Data inserted', NOW());");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_insert_survey');
    }
};
