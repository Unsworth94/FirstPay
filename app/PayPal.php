<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayPal extends Model {
	
	
	private $email, $total, $invoiceId;
	
	
	function __construct($email, $total, $invoiceId) {
		
		$this->email = $email;
		$this->total = $total;
		$this->invoiceId = $invoiceId;
		
	}
	
	
	
}