<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryKind extends Model {
	protected $fillable = [
		'lab_testkind_id', 
		'lab_testkind_name', 
		'deleted', 
	];
}
