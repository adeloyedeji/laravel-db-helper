<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratorySubgroup extends Model {
	protected $fillable = [
		'lab_subgroup_id', 
		'lab_subgroup_name', 
		'deleted', 
	];
}
