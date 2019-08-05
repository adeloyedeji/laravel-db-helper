<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemsTax extends Model {
	protected $fillable = [
		'item_id', 
		'name', 
		'percent', 
	];
}
