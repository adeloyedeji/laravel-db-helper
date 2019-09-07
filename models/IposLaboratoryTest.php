<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryTest extends Model {
	protected $table = 'ipos_laboratory_test';
	protected $fillable = [
		'item_id', 
		'test_code', 
		'test_name', 
		'test_type', 
		'test_amount', 
		'test_subgroup', 
		'test_kind', 
		'deleted', 
		'test_unit', 
	];
}
