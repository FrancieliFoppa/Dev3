<?php
require_once('lib/model/Dto.php');
class FormaPagamentoDto extends Dto {
	
	protected $attributes = array (
 		"IdFormaPagamento"				=> null,	
		"TipoFormaPagamento"			=> null,
		"DescricaoFormaPagamento"		=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>