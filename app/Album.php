<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['user_id', 'artwork_id'];
    public function albums()
    {
      return $this->belongsto(User::Class);
      return $this->belongsto(Artwork::Class);
    }


}
