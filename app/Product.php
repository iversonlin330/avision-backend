<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
	protected $guarded = ['id'];
	protected $casts = [
		'characteristic' => 'array',
		'spec' => 'array',
		'software' => 'array',
		'cert' => 'array',
		'filter' => 'array',
	];
	
	public function downloads()
    {
        return $this->hasMany('App\Download');
    }
	
	public function softwares()
    {
        return $this->hasMany('App\Software');
    }
	
	public function accessories()
    {
        return $this->hasMany('App\Accessory');
    }
	
	public function faqs()
    {
        return $this->hasMany('App\Faq');
    }
}
