<?php
require_once('lib/model/Dto.php');
class CertificadoDto extends Dto {
	
	protected $attributes = array (
 		"IdCertificado"			=> null,	
		"CamposDoCertificado"				=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>