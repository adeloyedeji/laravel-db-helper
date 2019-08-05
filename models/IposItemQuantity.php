<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemQuantity extends Model {
	protected $fillable = [
		'item_id', 
		'location_id', 
		'quantity', 
	];
}
