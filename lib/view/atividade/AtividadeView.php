<?php
require_once ('lib/view/SiteView.php');

class AtividadeView extends SiteView{

	public function getTemplate() {
		ob_start();
		if($this->action == null){
			require_once("lib/view/deny/default.php");			
		}else{
			switch($this->action) {
				case 'cadastroAtividade':
					require_once("lib/view/atividade/cadastroAtividade.php");
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
