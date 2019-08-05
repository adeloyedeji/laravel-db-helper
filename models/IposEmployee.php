<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposEmployee extends Model {
	protected $fillable = [
		'username', 
		'password', 
		'roles', 
		'person_id', 
		'deleted', 
		'hash_version', 
		'role', 
		'branch_id', 
		'auth_code', 
	];
}
