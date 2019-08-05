<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesPayment extends Model {
	protected $fillable = [
		'sale_id', 
		'payment_type', 
		'payment_amount', 
	];
}
