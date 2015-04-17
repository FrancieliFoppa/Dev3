<?php
require_once('lib/model/Dao.php');
class FormaPagamentoDao extends Dao {
	public function __construct() {
		parent::__construct("FormaPagamento", "FormaPagamentoDto");
	}
}
?>