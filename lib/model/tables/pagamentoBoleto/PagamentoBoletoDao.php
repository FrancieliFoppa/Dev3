<?php
require_once('lib/model/Dao.php');
class PagamentoBoletoDao extends Dao {
	public function __construct() {
		parent::__construct("PagamentoBoleto", "PagamentoBoletoDto");
	}
}
?>