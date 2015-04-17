<?php
require_once('lib/model/Dao.php');
class PerguntaDao extends Dao {
	public function __construct() {
		parent::__construct("Pergunta", "PerguntaDto");
	}
}
?>