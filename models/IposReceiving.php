<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposReceiving extends Model {
	protected $fillable = [
		'receiving_time', 
		'supplier_id', 
		'employee_id', 
		'comment', 
		'receiving_id', 
		'payment_type', 
		'reference', 
	];
}
