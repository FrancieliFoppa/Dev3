<?php
require_once('lib/model/Dao.php');
class PagamentoCartaoDao extends Dao {
	public function __construct() {
		parent::__construct("PagamentoCartao", "PagamentoCartaoDto");
	}
}
?>