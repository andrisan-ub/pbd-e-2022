<?php

namespace Database\Factories;

use App\Models\PlanSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanScheduleTime>
 */
class PlanScheduleTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jamMulai = date('H:i', rand(25200, 55800)) . ":00";
        //waktu kuliah 50 menit, 100 menit atau 150 menit
        $durasi = [3000, 6000, 9000];
        $jamAkhir = date('H:i', strtotime($jamMulai, 0) +  $durasi[random_int(0, sizeof($durasi) - 1)]) . ":00";
        return [
            'plan_schedule_id' => PlanSchedule::factory(),
            'hari' => random_int(0, 6), //0=Minggu/Sunday
            'jam_mulai' => $jamMulai,
            'jam_akhir' => $jamAkhir,
        ];
    }
}
