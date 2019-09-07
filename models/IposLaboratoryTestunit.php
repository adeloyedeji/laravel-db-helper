<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryTestunit extends Model {
	protected $table = 'ipos_laboratory_testunit';
	protected $fillable = [
		'lab_testunit_id', 
		'lab_testunit_name', 
		'deleted', 
	];
}
