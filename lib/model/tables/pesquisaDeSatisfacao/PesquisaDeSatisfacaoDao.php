<?php
require_once('lib/model/Dao.php');
class PesquisaDeSatisfacaoDao extends Dao {
	public function __construct() {
		parent::__construct("PesquisaDeSatisfacao", "PesquisaDeSatisfacaoDto");
	}
}
?>