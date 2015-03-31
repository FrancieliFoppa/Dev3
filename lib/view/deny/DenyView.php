<?php
require_once ('lib/view/SiteView.php');

class DenyView extends SiteView{

	public function getTemplate() {
		
		ob_start();
		if($this->action == null){
			require_once("lib/view/deny/default.php");			
		}else{			
			switch($this->action) {
				case 'pageNotFound':
					require_once("lib/view/deny/pageNotFound.php");
					break;
				case 'accessDenied':
					require_once("lib/view/deny/accessDenied.php");
					break;
				case 'actionNotFound':
					require_once("lib/view/deny/actionNotFound.php");
					break;
				default:
					require_once("lib/view/deny/pageNotFound.php");
			}
		}				
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
	
}

?>
