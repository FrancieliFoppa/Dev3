<?php

require_once ('lib/control/SiteController.php');
require_once ('lib/view/evento/EventoView.php');
require_once ('lib/view/deny/DenyView.php');

class EventoController extends SiteController {
	
	public function __construct() {
		parent::__construct();

		switch($_REQUEST["action"]){
			case "listaEventos" :
				$this->view = new EventoView("listaEventos");
				break;
			default: 
				$this->view = new EventoView("home");
				break;
		}
	}
}
