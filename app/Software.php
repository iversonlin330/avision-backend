<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Software extends Model
{
    //
	protected $guarded = ['id'];
	
	public function getTypeTextAttribute()
    {
		return \Config::get('map.software_type')[$this->type];
    }
	
	public function getFileSizeAttribute()
    {
		$bytes = Storage::size($this->file);
		$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

		$bytes = max($bytes, 0); 
		$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
		$pow = min($pow, count($units) - 1); 

		// Uncomment one of the following alternatives
		$bytes /= pow(1024, $pow);
		// $bytes /= (1 << (10 * $pow)); 

		return round($bytes, 2) . ' ' . $units[$pow];
		
		//return Storage::size($this->download_file);
    }
}
