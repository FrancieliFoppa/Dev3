<?php
require_once('lib/model/Dto.php');
class PesquisaDeSatisfacaoDto extends Dto {
	
	protected $attributes = array (
 		"IdPesquisaDeSatisfacao"			=> null
		
	);
	public function __construct($properties) {
		parent::__construct($this->attributes, $properties);
	}
	
}
?>