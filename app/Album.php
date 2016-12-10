<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['user_id', 'artwork_id'];
    public function users()
    {
      return $this->belongsto(User::Class);
    }
    public function artworks()
    {

      return $this->belongsto(Artwork::Class);
    }


}
