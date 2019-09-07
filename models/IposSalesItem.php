<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesItem extends Model {
	protected $table = 'ipos_sales_items';
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
		'qty_selected', 
		'reference', 
	];
}
