<?php
require_once ('lib/view/SiteView.php');

class EventoView extends SiteView{

	public function getTemplate() {
		ob_start();
		if($this->action == null){
			require_once("lib/view/deny/default.php");			
		}else{
			switch($this->action) {
				case 'descEvento':
					require_once("lib/view/evento/descEvento.php");
					break;
				case 'listaEventos':
					require_once("lib/view/evento/listaEventos.php");
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
