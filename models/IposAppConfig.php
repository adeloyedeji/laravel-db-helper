<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposAppConfig extends Model {
	protected $table = 'ipos_app_config';
	protected $fillable = [
		'key', 
		'value', 
	];
}
