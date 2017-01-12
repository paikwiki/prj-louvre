<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork_material extends Model
{
    protected $table = 'Artwork_material';

    protected $fillable = ['artwork_id', 'material_id'];
    public $timestamps = false;
}
