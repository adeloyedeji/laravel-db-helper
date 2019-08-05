<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryCategory extends Model {
	protected $fillable = [
		'lab_category_id', 
		'lab_category_name', 
		'deleted', 
	];
}
