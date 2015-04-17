<?php
require_once('lib/model/Dto.php');
class PagamentoCartaoDto extends Dto {
	
	protected $attributes = array (
 		"IdPagamentoCartao"			=> null,	
		"Bandeira"					=> null,
		"NumeroCartao"				=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>