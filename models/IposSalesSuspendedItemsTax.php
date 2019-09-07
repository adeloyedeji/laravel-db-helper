<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesSuspendedItemsTax extends Model {
	protected $table = 'ipos_sales_suspended_items_taxes';
	protected $fillable = [
		'sale_id', 
		'item_id', 
		'line', 
		'name', 
		'percent', 
	];
}
