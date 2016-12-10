<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = ['photo', 'name', 'date', 'type_id', 'student_id', 'size', 'engagement', 'completeness', 'feedback'];
    public function students()
    {
      return $this->belongsTo(Student::class);
    }
    public function types()
    {
      return $this->belongsTo(Type::class);
    }
    public function tags()
    {
      return $this->belongsToMany(Tag::class) ;
    }
    public function albums()
    {
      return $this->has(Album::class);
    }
}
