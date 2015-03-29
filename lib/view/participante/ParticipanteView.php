<?php
require_once ('lib/view/SiteView.php');

class ParticipanteView extends SiteView{

	public function getTemplate() {
		error_log($this->action);
		ob_start();
		if($this->action == null){
			require_once("lib/view/deny/default.php");			
		}else{
			error_log($this->action);
			switch($this->action) {
				case 'listaEventos':
					require_once("lib/view/evento/listaEventos.php");
					break;
				case 'home':
					require_once("lib/view/participante/index.php");
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
