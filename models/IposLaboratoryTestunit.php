<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryTestunit extends Model {
	protected $fillable = [
		'lab_testunit_id', 
		'lab_testunit_name', 
		'deleted', 
	];
}
