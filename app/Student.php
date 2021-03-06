<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['name','tel','email', 'user_id', 'profile_pic', 'birth', 'enroll_date', 'purpose', 'status', 'comment' ];

  public function user()
  {
    return $this->belongsto(User::class);
  }
  public function artwork()
  {
    return $this->hasMany(Artwork::class);
  }
  public function attendance()
  {
    return $this->hasMany(Attendance::class);
  }
  public function course()
  {
    return $this->belongsto(Course::class);
  }

}
