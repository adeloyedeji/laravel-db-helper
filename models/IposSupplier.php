<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSupplier extends Model {
	protected $table = 'ipos_suppliers';
	protected $fillable = [
		'person_id', 
		'company_name', 
		'agency_name', 
		'account_number', 
		'deleted', 
	];
}
