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

        $procedure = "DROP TRIGGER IF EXISTS `BFR_INS_PLANS`;
        create trigger BFR_INS_PLANS before insert on PLANS 
for each row 
begin 
	declare bfr_sks int;
	declare new_sks int;

	select sum(ps.sks) into bfr_sks 
            from plans p 
            join student_data sd on sd.id = p.student_data_id 
            join users u on u.id = sd.id
            join plan_schedules ps on ps.id = p.plan_schedule_id
            where p.student_data_id = new.student_data_id;
           
    select ps.sks into new_sks 
    	from plan_schedules ps where ps.id = new.plan_schedule_id;
    
  	-- jika sks lebih dari batas, maka jangan masukin data!
    -- masukin error null constraint
    if bfr_sks+new_sks > 25 then 
    	set new.plan_schedule_id = null;
    	set new.student_data_id = null;
    end if;
end;";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP TRIGGER IF EXISTS `BFR_INS_PLANS`;");
            }
};
