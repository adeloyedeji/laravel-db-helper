<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemExpiry extends Model {
	protected $table = 'ipos_item_expiry';
	protected $fillable = [
		'id', 
		'item_id', 
		'location_id', 
		'batch_no', 
		'expiry', 
	];
}
