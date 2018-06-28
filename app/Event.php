<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{	
	protected $table='events';
    protected $fillable=['name','shortnote','detail','ticket_price'];
}
