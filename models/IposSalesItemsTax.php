<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesItemsTax extends Model {
	protected $fillable = [
		'sale_id', 
		'item_id', 
		'line', 
		'name', 
		'percent', 
		'tax_type', 
		'rounding_code', 
		'cascade_tax', 
		'cascade_sequence', 
		'item_tax_amount', 
	];
}
