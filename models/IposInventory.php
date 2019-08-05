<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposInventory extends Model {
	protected $fillable = [
		'trans_id', 
		'trans_items', 
		'trans_user', 
		'trans_date', 
		'trans_comment', 
		'trans_location', 
		'trans_inventory', 
	];
}
