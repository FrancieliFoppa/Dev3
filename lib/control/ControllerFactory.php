<?php

// Require_once dos controllers
require_once ('lib/control/PagamentoController.php');
require_once ('lib/control/ParticipanteController.php');
require_once ('lib/control/AtividadeController.php');
require_once ('lib/control/EventoController.php');
require_once ('lib/control/UsuarioController.php');
require_once ('lib/control/DivulgacaoController.php');
require_once ('lib/control/VoucherController.php');
require_once ('lib/control/QueryController.php');
require_once ('lib/control/DenyController.php');
require_once ('lib/control/SiteController.php');

class ControllerFactory {

	// Lista de controllers
	public static $controllers = array(
			"pagamento"		=> "PagamentoController",
			"participante"	=> "ParticipanteController",
			"atividade"		=> "AtividadeController",
			"evento"		=> "EventoController",
			"usuario"		=> "UsuarioController",
			"divulgacao"	=> "DivulgacaoController",
			"voucher"		=> "VoucherController",
			"login"			=> "LoginController",
			"query"			=> "QueryController",
			"deny"			=> "DenyController",
			"site"			=> "SiteController"
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
