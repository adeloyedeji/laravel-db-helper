<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposTaxCodeRate extends Model {
	protected $fillable = [
		'rate_tax_code', 
		'rate_tax_category_id', 
		'tax_rate', 
		'rounding_code', 
	];
}
