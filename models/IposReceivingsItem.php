<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposReceivingsItem extends Model {
	protected $table = 'ipos_receivings_items';
	protected $fillable = [
		'receiving_id', 
		'item_id', 
		'description', 
		'serialnumber', 
		'line', 
		'quantity_purchased', 
		'item_cost_price', 
		'item_unit_price', 
		'discount_percent', 
		'item_location', 
		'receiving_quantity', 
	];
}
