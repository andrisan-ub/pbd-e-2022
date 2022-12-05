<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentData extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    public function planSchedule()
    {
        return $this->hasMany(PlanSchedule::class);
    }

    public function user()
    {
        return $this->belongsTo('User', 'id', 'id');
    }
}
