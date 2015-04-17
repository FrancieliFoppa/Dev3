<?php
require_once('lib/model/Dao.php');
class PagamentoDao extends Dao {
	public function __construct() {
		parent::__construct("Pagamento", "PagamentoDto");
	}
}
?>