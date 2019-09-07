<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposOpenRegister extends Model {
	protected $table = 'ipos_open_register';
	protected $fillable = [
		'register_id', 
		'employeeID', 
		'time_started', 
		'date_entered', 
		'status', 
		'balance_entered', 
	];
}
