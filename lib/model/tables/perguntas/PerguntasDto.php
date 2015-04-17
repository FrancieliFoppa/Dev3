<?php
require_once('lib/model/Dto.php');
class PerguntaDto extends Dto {
	
	protected $attributes = array (
 		"IdPergunta"			=> null,	
		"Pergunta"				=> null
		
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>