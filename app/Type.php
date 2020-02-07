<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
	protected $guarded = ['id'];
	
	public function products()
    {
        return $this->hasMany('App\Product');
    }
	
	public function group_type()
    {
        return $this->belongsTo('App\GroupType',"type","id");
    }
}
