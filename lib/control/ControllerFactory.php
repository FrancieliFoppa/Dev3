<?php

// Require_once dos controllers
require_once ('lib/control/AtividadeController.php');
require_once ('lib/control/ParticipanteController.php');
require_once ('lib/control/UsuarioController.php');
require_once ('lib/control/QueryController.php');
require_once ('lib/control/DenyController.php');
require_once ('lib/control/StaticController.php');
require_once ('lib/control/LoginController.php');
require_once ('lib/control/EventoController.php');

class ControllerFactory {

	// Lista de controllers
	public static $controllers = array(
			"atividade"		=> "AtividadeController",
			"participante"	=> "ParticipanteController",
			"usuario"		=> "UsuarioController",
			"login"			=> "LoginController",
			"query"			=> "QueryController",
			"deny"			=> "DenyController",
			"evento"		=> "EventoController",
			"static"		=> "StaticController"
	);

	// Retorna controller apropriado baseado no parametro $show
	public static function getInstance($show){

		$found = false;
		foreach(ControllerFactory::$controllers as $key => $value){
			if($key == $show){
				$found = true;
				break;
			}
		}

		if(!$found){
			$selectedController = ControllerFactory::$controllers["deny"];
		}else{
			$selectedController = ControllerFactory::$controllers[$show];
		}
		return new $selectedController;
	}
}
?>
