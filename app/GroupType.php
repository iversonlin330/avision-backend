<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupType extends Model
{
    //
	protected $guarded = ['id'];
	
	public function types()
    {
        return $this->hasMany('App\Type','type');
    }
}
