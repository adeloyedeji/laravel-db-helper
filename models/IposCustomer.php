<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposCustomer extends Model {
	protected $fillable = [
		'person_id', 
		'company_name', 
		'account_number', 
		'taxable', 
		'sales_tax_code', 
		'discount_percent', 
		'package_id', 
		'points', 
		'deleted', 
	];
}
