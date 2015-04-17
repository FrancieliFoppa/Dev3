<?php
require_once('lib/model/Dao.php');
class CentroDeEventosDao extends Dao {
	public function __construct() {
		parent::__construct("CentroDeEventos", "CentroDeEventosDto");
	}
}
?>