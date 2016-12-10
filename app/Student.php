<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['name','tel','e-mail', 'user_id', 'profile_pic', 'birth', 'enroll_date', 'course_id', 'purpose', 'status', 'comment' ];

  public function users()
  {
    return $this->belongsto(User::class);
  }
  public function artworks()
  {
    return $this->hasMany(Artwork::class);
  }
  public function attendances()
  {
    return $this->hasMany(Attendance::class);
  }
  public function courses()
  {
    return $this->belongsto(Course::class);
  }
}
