<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        $procedure = "DROP PROCEDURE IF EXISTS `kelompok4_cursor_content_post`;
        CREATE PROCEDURE `kelompok4_cursor_content_post`()
        BEGIN	
            DECLARE c_id,c_content_post TEXT;
            DECLARE cur_loop BOOLEAN DEFAULT FALSE;
            DECLARE cursor_critlevel CURSOR FOR SELECT id_post, content_post
            FROM post;
            DECLARE CONTINUE HANDLER FOR NOT FOUND 
            SET cur_loop = TRUE;
            OPEN cursor_critlevel;
            c_content_loop : LOOP
            FETCH FROM cursor_critlevel INTO c_id, c_content_post;
            IF cur_loop THEN
                LEAVE c_content_loop;
            END IF;
            IF cur_loop THEN
                LEAVE c_content_loop;
            END IF;
            END LOOP c_content_loop;
            CLOSE cursor_critlevel;
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
        Schema::dropIfExists('kelompok4_cursor_content_post');
    }
};
