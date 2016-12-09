<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['name','e-mail','password'];

  public function students()
  {
    return $this->belongsTo(Tag::class);
  }
}
