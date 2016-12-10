<?php

//course table 안쓰기로. 나중에 삭제필요!!!
namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    public function courses()
    {
      return $this->hasMany(Student::class);
      return $this->hasMany(User::class);
    }
}
