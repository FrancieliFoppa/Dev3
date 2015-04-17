<?php
require_once('lib/model/Dto.php');
class CentroDeEventosDto extends Dto {
	
	protected $attributes = array (
 		"IdCentroDeEventos"			=> null,	
		"Endereco"				=> null,
		"Cidade"				=> null,
		"Estado"				=> null,
		"Pais"				=> null,
		"Cep"				=> null,
		"CapacidadePessoas"				=> null
		
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>