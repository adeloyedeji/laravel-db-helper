<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposSession extends Model {
	protected $table = 'ipos_sessions';
	protected $fillable = [
		'id', 
		'ip_address', 
		'timestamp', 
		'data', 
	];
}
