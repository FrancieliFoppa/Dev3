<?php

require_once ('lib/control/SiteController.php');
require_once ('lib/view/atividade/AtividadeView.php');
require_once ('lib/view/deny/DenyView.php');

class AtividadeController extends SiteController {
	
	public function __construct() {
		parent::__construct();
		if(isset($_SESSION["usuario"]) || isset($_SESSION["participante"])){
			switch($_REQUEST["action"]){
				case "cadastroAtividade" :
					$this->view = new AtividadeView("cadastroAtividade");
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
