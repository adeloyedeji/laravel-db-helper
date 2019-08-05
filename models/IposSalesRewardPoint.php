<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesRewardPoint extends Model {
	protected $fillable = [
		'id', 
		'sale_id', 
		'earned', 
		'used', 
	];
}
