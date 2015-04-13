<?php 
	require_once ('lib/control/ControllerFactory.php');
	require_once ('lib/model/DataAccess.php');
	
	date_default_timezone_set('Etc/GMT+3');
	session_start();
	
	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'UTF-8');
	
	$_SESSION["dbConnection"] = DataAccess::getInstance();
	
	if(isset($_REQUEST["ajax"])){
		$ajax = $_REQUEST["ajax"];
	}else{
		$ajax = false;
	}
	
	if(isset($_REQUEST["show"])){
		//Chose the correct Controller
		$controller = ControllerFactory::getInstance($_REQUEST["show"]);
	}else{
		//Default controller
		$controller = ControllerFactory::getInstance("static");
	}
	
	$view = $controller->getView();
	
	if($ajax){
		echo $view->getContent();
	}else{
		if(!isset($_REQUEST["show"])){
			include 'lib/view/static/index.php';
		}else{
			if(isset($_REQUEST["onlyShow"]) && $_REQUEST["onlyShow"] == 1){
				echo $view->show();
			}else{
				if(isset($_SESSION["usuario"])){
					include 'lib/view/usuario/index.php';
				}else if(isset($_SESSION["participante"])){
					include 'lib/view/participante/index.php';
				}else{
					include 'lib/view/static/index.php';
				}
			}
		}
	}		
?>
