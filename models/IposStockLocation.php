<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposStockLocation extends Model {
	protected $fillable = [
		'location_id', 
		'location_name', 
		'location_address', 
		'location_number', 
		'location_email', 
		'deleted', 
	];
}
