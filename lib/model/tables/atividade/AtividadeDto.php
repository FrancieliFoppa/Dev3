<?php
require_once('lib/model/Dto.php');
class AtividadeDto extends Dto {
	
	protected $attributes = array (
 		"IdAtividade"			=> null,	
		"DescricaoAtividade"				=> null,
		"HoraRealizacao"				=> null,
		"DataAtividade"				=> null,
		"QuantidadeHoras"				=> null,
		"ValorAtividade"				=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>