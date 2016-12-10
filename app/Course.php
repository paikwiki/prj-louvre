<?php

//course table 안쓰기로. 나중에 삭제필요!!!
namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    public function student()
    {
      return $this->hasMany(Student::class);
    }
    public function user()
    {
      return $this->hasMany(User::class);
    }
}
