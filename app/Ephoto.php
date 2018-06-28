<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ephoto extends Model
{
    protected $table='event_photos';
    protected $fillable=['photo_name','event_id','forhome','movie_link'];
}
