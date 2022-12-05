<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['student_data_id', 'plan_schedule_id'];
    public $timestamps = false;

    //many to many
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function planSchedule()
    {
        return $this->belongsTo(PlanSchedule::class);
    }
}
