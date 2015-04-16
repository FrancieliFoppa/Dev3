<?php

require_once('lib/model/Dto.php');

class UsuariosDto extends Dto {
	
	protected $attributes = array (
 		"IdUsuario"			=> null,	
		"Nome"				=> null,
		"Email"				=> null,
		"Senha"				=> null,
		"IsAdm"	=> null
	);

	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}

?>
