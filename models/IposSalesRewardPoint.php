<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSalesRewardPoint extends Model {
	protected $table = 'ipos_sales_reward_points';
	protected $fillable = [
		'id', 
		'sale_id', 
		'earned', 
		'used', 
	];
}
