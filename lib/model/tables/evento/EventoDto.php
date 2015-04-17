<?php
require_once('lib/model/Dto.php');
class EventoDto extends Dto {
	
	protected $attributes = array (
 		"IdEvento"				=> null,	
		"NomeEvento"			=> null,
		"DescricaoEvento"		=> null,
		"DataInicio"			=> null,
		"DataFim"				=> null
		
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>