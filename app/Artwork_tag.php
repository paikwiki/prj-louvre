<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork_tag extends Model
{
    protected $fillable = ['artwork_id','tag_id'];
  /*  public function artwork_tag()
    {
      return $this->belongstoMany(Artwork::Class);
      return $this->belongstoMany(Tag::Class);
    }
    */
}
