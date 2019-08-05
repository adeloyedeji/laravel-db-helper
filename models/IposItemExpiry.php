<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemExpiry extends Model {
	protected $fillable = [
		'id', 
		'item_id', 
		'location_id', 
		'batch_no', 
		'expiry', 
	];
}
