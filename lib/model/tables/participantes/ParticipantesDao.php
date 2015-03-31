<?php

require_once('lib/model/Dao.php');

class ParticipantesDao extends Dao {

	public function __construct() {
		parent::__construct("Participantes", "ParticipantesDto");
	}
}

?>
