<?php
require_once('lib/model/Dao.php');
class AtividadeDao extends Dao {
	public function __construct() {
		parent::__construct("Atividade", "AtividadeDto");
	}
}
?>