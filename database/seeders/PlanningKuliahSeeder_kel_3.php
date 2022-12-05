<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\StudentData;
use App\Models\PlanSchedule;
use Illuminate\Database\Seeder;
use App\Models\PlanScheduleTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanningKuliahSeeder_kel_3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $maxId = StudentData::latest('id')->first()->id;
        /*
        *   Each student has ~25 PlanSchedule
        *   not all students has a planSchedule, because that'll create thousands of data (too many)
        *   so i'll divide it by 2   
        */
        $planSchedule = PlanSchedule::factory()->count(($maxId / 2) * 25)->create();

        /*
        *   Each schedule has it's own time/s
        *   ex: Teknologi Informasi A Pemrograman Dasar -> Jumat 07:00-08:00 & Senin 09:00-10:00.
        */
        $temp = array();
        for ($i = 0; $i < sizeof($planSchedule); $i++) {
            PlanScheduleTime::factory()->count(2)->for($planSchedule->get($i))->create();
            $arrtemp = array_map(null, $planSchedule->get($i)->toArray())["student_data_id"];
            // echo $arrtemp . " ";
            array_push($temp, $arrtemp);
        }
        // echo "\nbesar temp: " . sizeof($temp) . "\n";

        //each student chooses it's plan (planning krs)
        $student_ids = array_unique($temp);
        // echo "besar student_IDS: " . sizeof($student_ids) . "\n";
        foreach ($student_ids as $key => $id) {
            $sd = StudentData::find($id);
            $schedules = $sd->planSchedule;
            // echo "besar schedules: " . sizeof($schedules) . "\n";

            $rdmn = random_int(2, 4);
            for ($i = 0; $i < $rdmn && $i < sizeof($schedules); $i++) {
                $plan = new Plan;
                $plan->student_data_id = $id;
                $plan->plan_schedule_id = $schedules[random_int(0, sizeof($schedules) - 1)]->id;
                $plan->save();
            }
        }
    }
}
