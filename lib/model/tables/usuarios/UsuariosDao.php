<?php

require_once('lib/model/Dao.php');

class UsuariosDao extends Dao {

	public function __construct() {
		parent::__construct("Usuarios", "UsuariosDto");
	}
}

?>
