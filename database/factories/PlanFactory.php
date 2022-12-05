<?php

namespace Database\Factories;

use App\Models\PlanSchedule;
use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //many to many
        return [
            'student_data_id' => StudentData::factory(),
            'plan_shedule_id' => PlanSchedule::factory(),
        ];
    }
}
