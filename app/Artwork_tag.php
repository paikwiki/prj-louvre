<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork_Tag extends Model
{
    protected $table = 'artwork_tag';

    protected $fillable = ['artwork_id','tag_id'];
    public $timestamps = false;
  /*  public function artwork_tag()
    {
      return $this->belongstoMany(Artwork::Class);
      return $this->belongstoMany(Tag::Class);
    }
    */
}
