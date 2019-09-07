<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposPermission extends Model {
	protected $table = 'ipos_permissions';
	protected $fillable = [
		'permission_id', 
		'module_id', 
		'location_id', 
	];
}
