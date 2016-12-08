<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function artworks()
    {
      return $this->hasMany(Artwork::class);
    }
}
