<?php

require_once ('lib/control/SiteController.php');
require_once ('lib/view/evento/EventoView.php');
require_once ('lib/view/deny/DenyView.php');

class EventoController extends SiteController {
	
	public function __construct() {
		parent::__construct();
		if(isset($_SESSION["usuario"]) || isset($_SESSION["participante"])){
			switch($_REQUEST["action"]){
				case "cadastroEvento" :
					$this->view = new EventoView("cadastroEvento");
					break;
				case "descEvento" :
					$this->view = new EventoView("descEvento");
					break;
				case "listaEventos" :
					$this->view = new EventoView("listaEventos");
					break;
				default:
					$this->view = new DenyView("pageNotFound");
					break;
			}
		}else{
			$this->view = new DenyView("accessDenied");
		}
	}
}
