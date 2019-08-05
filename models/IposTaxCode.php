<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposTaxCode extends Model {
	protected $fillable = [
		'tax_code', 
		'tax_code_name', 
		'tax_code_type', 
		'city', 
		'state', 
	];
}
