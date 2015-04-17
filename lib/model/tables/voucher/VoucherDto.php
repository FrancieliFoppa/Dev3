<?php
require_once('lib/model/Dto.php');
class VoucherDto extends Dto {
	
	protected $attributes = array (
 		"IdVoucher"					=> null,	
		"CodigoSeguranca"			=> null,
		"ValorDesconto"				=> null
		
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>