<?php

require_once ('lib/view/deny/DenyView.php');

class SiteController {
	
	protected $view;
			
	public function __construct() {
	
	}
	
	public function getView() {
		if($this->view == null){
			$this->view = DenyView("pageNotFound");
		}
		return $this->view;
	}
}

?>