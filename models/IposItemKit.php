<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemKit extends Model {
	protected $table = 'ipos_item_kits';
	protected $fillable = [
		'item_kit_id', 
		'name', 
		'item_id', 
		'kit_discount_percent', 
		'price_option', 
		'print_option', 
		'description', 
	];
}
