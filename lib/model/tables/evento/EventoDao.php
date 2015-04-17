<?php
require_once('lib/model/Dao.php');
class EventoDao extends Dao {
	public function __construct() {
		parent::__construct("Evento", "EventoDto");
	}
}
?>