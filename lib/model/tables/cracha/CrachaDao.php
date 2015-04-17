<?php
require_once('lib/model/Dao.php');
class CrachaDao extends Dao {
	public function __construct() {
		parent::__construct("Cracha", "CrachaDto");
	}
}
?>