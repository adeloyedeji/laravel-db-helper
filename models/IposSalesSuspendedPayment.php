<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesSuspendedPayment extends Model {
	protected $table = 'ipos_sales_suspended_payments';
	protected $fillable = [
		'sale_id', 
		'payment_type', 
		'payment_amount', 
	];
}
