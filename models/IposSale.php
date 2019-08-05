<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSale extends Model {
	protected $fillable = [
		'sale_time', 
		'customer_id', 
		'employee_id', 
		'comment', 
		'invoice_number', 
		'quote_number', 
		'sale_id', 
		'sale_status', 
		'dinner_table_id', 
		'location_id', 
		'sales_amount', 
		'auth_code', 
	];
}
