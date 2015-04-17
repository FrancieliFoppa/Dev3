<?php
require_once('lib/model/Dto.php');
class PagamentoBoletoDto extends Dto {
	
	protected $attributes = array (
 		"IdPagamentoBoleto"			=> null,	
		"CodigoDeBarras"			=> null,
		"Sacado"					=> null,
		"Valor"						=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>