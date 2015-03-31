<?php
require_once ('lib/view/SiteView.php');

class LoginView extends SiteView{

	public function getTemplate() {
		ob_start();
		require_once("lib/view/static/home.php");
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
	
}

?>
