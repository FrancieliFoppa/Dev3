<?php
require_once('lib/model/Dao.php');
class CertificadoDao extends Dao {
	public function __construct() {
		parent::__construct("Certificado", "CertificadoDto");
	}
}
?>