<?php
require_once('lib/model/Dto.php');
class InscricaoDto extends Dto {
	
	protected $attributes = array (
 		"IdIncricao"		=> null,	
		"Data"				=> null,
		"Presenca"			=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>