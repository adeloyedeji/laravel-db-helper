<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposPerson extends Model {
	protected $table = 'ipos_people';
	protected $fillable = [
		'first_name', 
		'last_name', 
		'gender', 
		'phone_number', 
		'email', 
		'address_1', 
		'address_2', 
		'city', 
		'state', 
		'zip', 
		'country', 
		'comments', 
		'person_id', 
		'date_of_birth', 
		'age', 
	];
}
