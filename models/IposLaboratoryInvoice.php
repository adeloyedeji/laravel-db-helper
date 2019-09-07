<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryInvoice extends Model {
	protected $table = 'ipos_laboratory_invoice';
	protected $fillable = [
		'invoice_id', 
		'invoice_time', 
		'person_id', 
		'doctor_name', 
		'status', 
	];
}
