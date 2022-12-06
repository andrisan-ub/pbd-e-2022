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
        CREATE TRIGGER `aaa` BEFORE INSERT ON `class_schedules`
        FOR EACH ROW BEGIN
            DECLARE errorMessage VARCHAR(255);
            DECLARE room VARCHAR(255);
            DECLARE day VARCHAR(20);
            DECLARE stime INT;
            DECLARE etime INT;
            DECLARE suma INT;

            SET errorMessage = `test`;
            SET room = (SELECT rooms.name FROM rooms WHERE id = NEW.room_id);
            SET stime = (SELECT start_times.time FROM start_times WHERE id = NEW.start_id);
            SET etime = (SELECT end_times.time WHERE id = NEW.end_id);
            
            IF 0 < (SELECT COUNT(id) FROM class_schedules
                    WHERE room_id = NEW.rood.id AND 
                    day_id = NEW.day_id AND (
                    start_id = NEW.start.id OR
                    end_id = NEW.end.id))
            THEN
                SIGNAL SQLSTATE \'45000\'
                SET MESSAGE_TEXT = errorMessage;
            END IF;
            
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `aaa`');
    }
};
