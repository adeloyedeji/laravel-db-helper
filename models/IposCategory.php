<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposCategory extends Model {
	protected $table = 'ipos_categories';
	protected $fillable = [
		'id', 
		'name', 
		'icon', 
		'created_at', 
		'updated_at', 
	];
}
