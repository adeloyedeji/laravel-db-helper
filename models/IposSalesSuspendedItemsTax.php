<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesSuspendedItemsTax extends Model {
	protected $fillable = [
		'sale_id', 
		'item_id', 
		'line', 
		'name', 
		'percent', 
	];
}
