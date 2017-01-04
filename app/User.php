<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', 'name', 'email', 'password', 'course_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function course()
    {
      return $this->belongsto(Course::class);//나중에삭제해야함.
    }
    public function student()
    {
      return $this->hasMany(Student::class);
    }
    public function album()
    {
      return $this->has(Album::class);
    }
}
