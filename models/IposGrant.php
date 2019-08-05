<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposGrant extends Model {
	protected $fillable = [
		'permission_id', 
		'person_id', 
	];
}
