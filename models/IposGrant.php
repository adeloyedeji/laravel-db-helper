<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposGrant extends Model {
	protected $table = 'ipos_grants';
	protected $fillable = [
		'permission_id', 
		'person_id', 
	];
}
