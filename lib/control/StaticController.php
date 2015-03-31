<?php
/*
 * Controler do conteudo estatico do site.
 */
require_once ('lib/view/static/StaticView.php');
require_once ('lib/control/SiteController.php');


class StaticController extends SiteController {
	
	public function __construct() {
		parent::__construct();

		if(!isset($_REQUEST["action"])){
			$this->view = new StaticView("home");
		}else{
			switch($_REQUEST["action"]){
				default :	
					$this->view = new StaticView($_REQUEST["action"]);
					break;
			}
			
		}
	}
	
}

?>