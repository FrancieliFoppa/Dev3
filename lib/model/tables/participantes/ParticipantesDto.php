<?php

require_once('lib/model/Dto.php');

class ParticipantesDto extends Dto {
	
	protected $attributes = array (
 		"IdParticipante"	=> null,	
		"Nome"				=> null,
		"Email"				=> null,
		"Telefone"			=> null,
		"CPF"				=> null
	);

	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}

?>
