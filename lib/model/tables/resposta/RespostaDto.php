<?php
require_once('lib/model/Dto.php');
class RespostaDto extends Dto {
	
	protected $attributes = array (
 		"IdResposta"			=> null,	
		"ValorResposta"			=> null
		
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>