<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposCustomersPackage extends Model {
	protected $table = 'ipos_customers_packages';
	protected $fillable = [
		'package_id', 
		'package_name', 
		'points_percent', 
		'deleted', 
	];
}
