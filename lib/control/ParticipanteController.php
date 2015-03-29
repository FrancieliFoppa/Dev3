<?php
require_once ('lib/view/participante/ParticipanteView.php');
require_once ('lib/control/SiteController.php');

class ParticipanteController extends SiteController {
	
	public function __construct() {
		parent::__construct();
		if(isset($_REQUEST["action"])){
			$this->view = new ParticipanteView($_REQUEST["action"]);
		}else{
			$this->view = new DenyView("pageNotFound");
		}
	}
}
?>