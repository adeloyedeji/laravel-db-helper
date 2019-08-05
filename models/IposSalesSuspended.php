<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesSuspended extends Model {
	protected $fillable = [
		'sale_time', 
		'customer_id', 
		'employee_id', 
		'comment', 
		'invoice_number', 
		'quote_number', 
		'sale_id', 
		'dinner_table_id', 
	];
}
