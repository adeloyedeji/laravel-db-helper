<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposRoleId extends Model {
	protected $table = 'ipos_role_id';
	protected $fillable = [
		'id', 
		'role', 
	];
}
