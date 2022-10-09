<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntendedLearningOutcome extends Model
{
    use HasFactory;

    public $table = 'intended_learning_outcome';

    public $timestamps = false;

    public function courseLearningOutcomes()
    {
        return $this->hasMany(CourseLearningOutcome::class, 'ilo_id');
    }
}
