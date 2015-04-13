<?php

require_once ('lib/control/SiteController.php');
require_once ('lib/view/usuario/UsuarioView.php');
require_once ('lib/view/deny/DenyView.php');

class UsuarioController extends SiteController {
	
	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION["usuario"])){
			$this->view = new DenyView("accessDenied");
		}else{
			switch($_REQUEST["action"]){
				case "listaUsuarios" :
					$this->view = new UsuarioView("listaUsuarios");
					break;
				case "home" :
					$this->view = new UsuarioView("home");
					break;
				default: 
					$this->view = new DenyView("pageNotFound");
					break;
			}
		}
	}
}
