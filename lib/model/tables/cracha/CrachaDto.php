<?php
require_once('lib/model/Dto.php');
class CrachaDto extends Dto {
	
	protected $attributes = array (
 		"IdCracha"			=> null,	
		"TipoCracha"		=> null,
		"Foto"				=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>