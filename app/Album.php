<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['user_id', 'artwork_id'];
    public function user()
    {
      return $this->belongsto(User::Class);
    }
    public function artwork()
    {

      return $this->belongsto(Artwork::Class);
    }


}
