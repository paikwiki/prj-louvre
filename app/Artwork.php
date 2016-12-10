<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = ['photo', 'name', 'date', 'type_id', 'student_id', 'size', 'engagement', 'completeness', 'feedback'];
    public function artworks()
    {
      return $this->belongsto(Student::class);
      return $this->belongsto(Type::class);
      return $this->BelongstoManyThrough(Artwork_tag::class);
      return $this->has(Album::class);
    }
}
