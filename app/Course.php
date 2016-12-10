<?php

//course table 안쓰기로. 나중에 삭제필요!!!
namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    public function students()
    {
      return $this->hasMany(Student::class);
    }
    public function users()
    {
      return $this->hasMany(User::class);
    }
}
