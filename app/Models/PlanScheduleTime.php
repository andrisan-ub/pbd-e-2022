<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanScheduleTime extends Model
{
    use HasFactory;

    protected $guarded = ['plan_schedule_id'];
    public $timestamps = false;

    public function planSchedule()
    {
        return $this->belongsTo(PlanSchedule::class);
    }
}
