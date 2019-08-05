<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesSuspendedItem extends Model {
	protected $fillable = [
		'sale_id', 
		'item_id', 
		'description', 
		'serialnumber', 
		'line', 
		'quantity_purchased', 
		'item_cost_price', 
		'item_unit_price', 
		'discount_percent', 
		'item_location', 
		'print_option', 
	];
}
