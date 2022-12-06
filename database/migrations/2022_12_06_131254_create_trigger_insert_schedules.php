<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER `before_insert_schedules` BEFORE INSERT ON `class_schedules`
        FOR EACH ROW BEGIN
                    DECLARE errorMessage VARCHAR(255);
                    DECLARE room VARCHAR(255);
                    DECLARE day VARCHAR(20);
                    DECLARE stime INT;
                    DECLARE etime INT;
                    DECLARE suma INT;
        
                    SET errorMessage = CONCAT(\'Ruangan sedang dipakai kelas lain\');
                    
                    IF 0 < (SELECT COUNT(id) FROM class_schedules
                            WHERE room_id = NEW.room_id AND 
                            day_id = NEW.day_id AND (
                            start_id = NEW.start_id OR
                            end_id = NEW.end_id))
                    THEN
                        SIGNAL SQLSTATE \'45000\'
                        SET MESSAGE_TEXT = errorMessage;
                    END IF;
                    
                END;
        CREATE TRIGGER `before_update_schedules` BEFORE INSERT ON `class_schedules`
        FOR EACH ROW BEGIN
                    DECLARE errorMessage VARCHAR(255);
                    DECLARE room VARCHAR(255);
                    DECLARE day VARCHAR(20);
                    DECLARE stime INT;
                    DECLARE etime INT;
                    DECLARE suma INT;
        
                    SET errorMessage = CONCAT(\'Ruangan sedang dipakai kelas lain\');
                    
                    IF 0 < (SELECT COUNT(id) FROM class_schedules
                            WHERE room_id = NEW.room_id AND 
                            day_id = NEW.day_id AND (
                            start_id = NEW.start_id OR
                            end_id = NEW.end_id))
                    THEN
                        SIGNAL SQLSTATE \'45000\'
                        SET MESSAGE_TEXT = errorMessage;
                    END IF;
                          
                ;END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
        DROP TRIGGER `before_insert_schedules`;
        DROP TRIGGER `before_update_schedules`');
    }
};
