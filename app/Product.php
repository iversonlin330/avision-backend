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
}
