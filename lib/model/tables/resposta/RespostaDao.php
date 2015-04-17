<?php
require_once('lib/model/Dao.php');
class RespostaDao extends Dao {
	public function __construct() {
		parent::__construct("Resposta", "RespostaDto");
	}
}
?>