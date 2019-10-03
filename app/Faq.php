<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
	protected $guarded = ['id'];
	
	public function getTypeTextAttribute()
    {
		return \Config::get('map.faq_type')[$this->type];
    }
}
