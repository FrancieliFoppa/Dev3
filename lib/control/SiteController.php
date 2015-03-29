<?php

require_once ('lib/view/deny/DenyView.php');
require_once ('lib/view/SiteView.php');

class SiteController {
	
	protected $view;
			
	public function __construct() {
	
	}
	
	public function getView() {
		if($this->view == null){
			$this->view = new SiteView("home");
		}
		return $this->view;
	}
}

?>