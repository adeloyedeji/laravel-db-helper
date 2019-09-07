<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposMigration extends Model {
	protected $table = 'ipos_migrations';
	protected $fillable = [
		'version', 
	];
}
