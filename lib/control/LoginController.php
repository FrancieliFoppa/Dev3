<?php

require_once ('lib/model/tables/usuarios/UsuariosDto.php');
require_once ('lib/model/tables/usuarios/UsuariosDao.php');
require_once ('lib/model/tables/participantes/ParticipantesDto.php');
require_once ('lib/model/tables/participantes/ParticipantesDao.php');
require_once ('lib/view/login/LoginView.php');
require_once ('lib/control/SiteController.php');

class LoginController extends SiteController {
		
	public function __construct() {
		parent::__construct();
		
		if(!isset($_REQUEST["action"])){
			$this->view = new LoginView(null);
		}else{
			switch($_REQUEST["action"]) {
				case "loginUsuario":
					$res = $this->loginUsuario();
					$this->view = new LoginView("login", $res['errorMsg'], $res['nextAction']);
					break;
				case "loginParticipante":
					$res = $this->loginParticipante();
					$this->view = new LoginView("login", $res['errorMsg'], $res['nextAction']);
					break;
				case "logout":
					$res = $this->logout();
					$this->view = new LoginView("login", $res['errorMsg'], $res['nextAction']);
					break;
				default:
					$this->view = new LoginView(null);
					break;
			}
		}
	}
	
	function loginUsuario(){
		
		session_unset(); 
 		session_destroy(); 
 		session_start();
		
		$json_result = array('errorMsg' => "", 'nextAction' => "");			
		
		if(isset($_REQUEST["user"]) && isset($_REQUEST["pass"])){

			$userDto = new UsuariosDto(array("nome" => $_REQUEST["user"], "senha" => $_REQUEST["pass"]));
			$userDao = new UsuariosDao();
			$userDto = $userDao->findByAttributes($userDto);
			
			if($userDto != null) {	
				//salva o usuario na session
				$_SESSION["usuario"] = serialize($userDto);
				$json_result['nextAction'] = "usuario&action=home"; 
				$json_result['errorMsg'] = ""; 
			}else{
				$json_result['errorMsg'] = "Usu&aacute;rio e Senha n&atilde;o conferem";			
			}
		}else{
			$json_result['errorMsg'] = "Usu&aacute;rio ou Senha em branco";
		}
		return $json_result;
	}
	
	function loginParticipante(){
	
		session_unset();
		session_destroy();
		session_start();
	
		$json_result = array('errorMsg' => "", 'nextAction' => "");
	
		if(isset($_REQUEST["user"]) && isset($_REQUEST["pass"])){
	
			$userDto = new ParticipantesDto(array("nome" => $_REQUEST["user"], "cpf" => $_REQUEST["cpf"]));
			$userDao = new ParticipantesDao();
			$userDto = $userDao->findByAttributes($userDto);
				
			if($userDto != null) {
				//salva o participante na session
				$_SESSION["participante"] = serialize($userDto);
				$json_result['nextAction'] = "participante&action=home";
				$json_result['errorMsg'] = "";
			}else{
				$json_result['errorMsg'] = "Nome e CPF n&atilde;o conferem";
			}
		}else{
			$json_result['errorMsg'] = "Nome ou CPF em branco";
		}
		return $json_result;
	}
		
	function logout(){
		$json_result = array('errorMsg' => "", 'nextAction' => "");			

		// Unset all of the session variables.
		$_SESSION = array();

		if (isset($_COOKIE[session_name()])) {
    		setcookie(session_name(), '', time()-42000, '/');
		}
		
		session_destroy();		
		return $json_result;
	}
		
}

?>