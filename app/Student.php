<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['name','tel','e-mail', 'user_id', 'profile_pic', 'birth', 'enroll_date', 'course_id', 'purpose', 'status', 'comment' ];

  public function students()
  {
    return $this->has(Attendance::class);
    return $this->hasMany(Artwork::class);
    return $this->belongsto(User::class);
    return $this->belongsto(Course::class);
  }
}
