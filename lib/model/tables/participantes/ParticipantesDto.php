<?php

require_once('lib/model/Dto.php');

class ParticipantesDto extends Dto {
	
	protected $attributes = array (
 		"idParticipante"	=> null,	
		"nome"				=> null,
		"email"				=> null,
		"telefone"			=> null,
		"cpf"				=> null
	);

	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}

?>
