<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanSchedule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function studentData()
    {
        return $this->belongsTo(StudentData::class);
    }



    public function plan()
    {
        return $this->hasMany(Plan::class);
    }
}
