<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryInvoiceItem extends Model {
	protected $fillable = [
		'invoice_id', 
		'test_id', 
	];
}
