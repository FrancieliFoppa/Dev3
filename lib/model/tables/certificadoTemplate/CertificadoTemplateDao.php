<?php
require_once('lib/model/Dao.php');
class CertificadoTemplateDao extends Dao {
	public function __construct() {
		parent::__construct("CertificadoTemplate", "CertificadoTemplateDto");
	}
}
?>