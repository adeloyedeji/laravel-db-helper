<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposCustomersPoint extends Model {
	protected $table = 'ipos_customers_points';
	protected $fillable = [
		'id', 
		'person_id', 
		'package_id', 
		'sale_id', 
		'points_earned', 
	];
}
