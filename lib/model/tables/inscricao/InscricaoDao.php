<?php
require_once('lib/model/Dao.php');
class InscricaoDao extends Dao {
	public function __construct() {
		parent::__construct("Inscricao", "InscricaoDto");
	}
}
?>