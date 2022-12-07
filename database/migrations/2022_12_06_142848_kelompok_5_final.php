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
        
        DB::unprepared("
        CREATE TRIGGER AFT_INS_USER_SKM_POINT
        AFTER INSERT ON user_skm_points
        FOR EACH ROW
        UPDATE total_skm_points
        SET total_skm = total_skm + FIND_USER_SKM_POINT(new.skm_point_id)
        WHERE user_id = NEW.user_id;
        ");


        DB::unprepared("
        
        CREATE FUNCTION FIND_USER_SKM_POINT (
            SKM_ID INT
            ) RETURNS INT
            READS SQL DATA
            DETERMINISTIC
            BEGIN
            DECLARE TEMP INT;
            DECLARE RETURNVAR INT;
            SET TEMP = SKM_ID;
            SET RETURNVAR = (
                SELECT point
                FROM skm_points
                WHERE id = TEMP
            );
            RETURN RETURNVAR;
            END
           ");

        DB::unprepared("
        CREATE TRIGGER AFT_INS_USER_SKM_POINT
        AFTER INSERT ON user_skm_points
        FOR EACH ROW
        UPDATE total_skm_points
        SET total_skm = total_skm + FIND_USER_SKM_POINT(new.skm_point_id)
        WHERE user_id = NEW.user_id;
        ");

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
