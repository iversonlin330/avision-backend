<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
	protected $guarded = ['id'];
	
	public function getTypeTextAttribute()
    {
		return \Config::get('map.picture_type')[$this->type];
    }
}
