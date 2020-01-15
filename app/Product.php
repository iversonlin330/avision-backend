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
        'accessory' => 'array',
        'faq' => 'array',
        'bonus' => 'array'
	];

	public function type()
    {
        return $this->belongsTo('App\Type');
    }

	public function pictures()
    {
        return $this->hasMany('App\Picture');
    }

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

	public function product_specs()
    {
        return $this->hasMany('App\ProductSpec');
    }


}
