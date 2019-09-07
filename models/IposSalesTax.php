<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesTax extends Model {
	protected $table = 'ipos_sales_taxes';
	protected $fillable = [
		'sale_id', 
		'tax_type', 
		'tax_group', 
		'sale_tax_basis', 
		'sale_tax_amount', 
		'print_sequence', 
		'name', 
		'tax_rate', 
		'sales_tax_code', 
		'rounding_code', 
	];
}
