<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryResult extends Model {
	protected $fillable = [
		'sale_id', 
		'invoice_id', 
		'result_time', 
		'customer_id', 
		'doctor_name', 
		'scientist', 
		'status', 
		'result_end', 
	];
}
