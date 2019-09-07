<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemsTax extends Model {
	protected $table = 'ipos_items_taxes';
	protected $fillable = [
		'item_id', 
		'name', 
		'percent', 
	];
}
