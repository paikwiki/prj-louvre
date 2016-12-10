<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['student_id','mon','tue','wed','thu','fri','sat','sun'];
    public function attendances()
    {
      return $this->belongsto(Student::class);
    }
}
