<?php

require_once ('lib/view/QueryView.php');
require_once ('lib/control/SiteController.php');

class QueryController extends SiteController {
	
	public function __construct() {
		parent::__construct();
		
		if(isset($_REQUEST["action"])){
			switch($_REQUEST["action"]){ 
				case "..." : $rel = new QueryTeste(); 
					$res = $rel->funcTeste();
					$this->view = new QueryView($res);
					break;
				default :	$this->view = new DenyView("actionNotFound");
					break;
			}
		}else{
			$this->view = new DenyView("actionNotFound");
		}
	}
	
}
	


?>