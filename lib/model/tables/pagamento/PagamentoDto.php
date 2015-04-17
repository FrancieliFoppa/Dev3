<?php
require_once('lib/model/Dto.php');
class PagamentoDto extends Dto {
	
	protected $attributes = array (
 		"IdPagamento"			=> null,	
		"TipoPagamento"			=> null,
		"DataPagamento"			=> null,
		"ValorPagamento"		=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>