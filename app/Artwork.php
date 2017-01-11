<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = ['photo', 'name', 'date', 'type_id', 'student_id', 'size', 'engagement', 'completeness', 'feedback'];
    public function student()
    {
      return $this->belongsTo(Student::class);
    }
    public function type()
    {
      return $this->belongsTo(Type::class);
    }
    public function tag()
    {
      return $this->belongsToMany(Tag::class) ;
    }
    public function album()
    {
      return $this->belongsTo(Album::class);
    }
}
