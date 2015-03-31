<?php

require_once('lib/model/Dto.php');

class UsuariosDto extends Dto {
	
	protected $attributes = array (
 		"idUsuario"			=> null,	
		"nome"				=> null,
		"email"				=> null,
		"senha"				=> null,
		"isAdministrator"	=> null
	);

	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}

?>
