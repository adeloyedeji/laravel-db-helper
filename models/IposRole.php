<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposRole extends Model {
	protected $fillable = [
		'roles', 
		'module_id', 
		'id', 
	];
}
