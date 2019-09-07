<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryCategory extends Model {
	protected $table = 'ipos_laboratory_category';
	protected $fillable = [
		'lab_category_id', 
		'lab_category_name', 
		'deleted', 
	];
}
