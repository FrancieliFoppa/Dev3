<?php
require_once ('lib/view/participante/ParticipanteView.php');
require_once ('lib/control/SiteController.php');

class ParticipanteController extends SiteController {
	
	public function __construct() {
		parent::__construct();
		if(isset($_REQUEST["action"])){
			switch($_REQUEST["action"]){
				case "cadastroParticipante" :
					$this->view = new ParticipanteView("cadastroParticipante");
					break;
				case "listaParticipantes" :
					$this->view = new ParticipanteView("listaParticipantes");
					break;
				default: 
					$this->view = new DenyView("pageNotFound");
					break;
			}
		}else{
			$this->view = new DenyView("pageNotFound");
		}
	}
}
?>