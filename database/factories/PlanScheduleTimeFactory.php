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
        $waktu1 = date('H:i', rand(25200, 62964)) . ":00";
        $waktu2 = date('H:i', rand(25200, 62964)) . ":00";
        return [
            'plan_schedule_id' => PlanSchedule::factory(),
            'hari' => random_int(0, 6), //0=Minggu/Sunday
            'jam_mulai' => min($waktu1, $waktu2),
            'jam_akhir' => max($waktu1, $waktu2),
        ];
    }
}
