<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposRole extends Model {
	protected $table = 'ipos_roles';
	protected $fillable = [
		'roles', 
		'module_id', 
		'id', 
	];
}
