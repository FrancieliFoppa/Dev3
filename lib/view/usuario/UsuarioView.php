<?php
require_once ('lib/view/SiteView.php');

class UsuarioView extends SiteView{

	public function getTemplate() {
		ob_start();
		if($this->action == null){
			require_once("lib/view/deny/default.php");			
		}else{
			switch($this->action) {
				case 'cadastroUsuario':
					require_once("lib/view/usuario/cadastroUsuario.php");
					break;
				case 'listaUsuarios':
					require_once("lib/view/usuario/listaUsuarios.php");
					break;
				case 'home':
					require_once("lib/view/usuario/home.php");
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
