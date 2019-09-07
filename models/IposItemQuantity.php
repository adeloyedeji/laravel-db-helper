<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemQuantity extends Model {
	protected $table = 'ipos_item_quantities';
	protected $fillable = [
		'item_id', 
		'location_id', 
		'quantity', 
	];
}
