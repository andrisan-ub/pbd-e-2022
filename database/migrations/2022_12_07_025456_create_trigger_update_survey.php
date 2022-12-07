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
        ("CREATE TRIGGER `update_survey` 
        AFTER UPDATE ON `survey_pembelajaran`
        FOR EACH ROW INSERT INTO survey_history
        VALUES (NULL, NEW.id, 'Data updated', NOW());");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_update_survey');
    }
};
