<?php
require_once ('lib/view/deny/DenyView.php');
require_once ('lib/control/SiteController.php');


class DenyController extends SiteController {
	
	public function __construct() {
		parent::__construct();
		if(isset($_REQUEST["action"])){
			$this->view = new DenyView($_REQUEST["action"]);
		}else{
			$this->view = new DenyView();
		}
	}
}
?>