<?php
require_once('lib/model/Dto.php');
class CertificadoTemplateDto extends Dto {
	
	protected $attributes = array (
 		"IdCertificadoTemplate"			=> null,	
		"NomeCertificadoTemplate"				=> null,
		"TipoCertificadoTemplate"		=> null,
		"FormatoCertificadoTemplate"		=> null
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>