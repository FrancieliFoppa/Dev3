<?php
require_once ('lib/view/SiteView.php');

/*
 * @class LoginView
 * 
 * @author Pedro Velho
 * 
 * Mostra login, registro e recuperação de senhas, casos de uso:
 * 
 * Login
 * Recupera Senha
 * Registra
 * 
 */
class StaticView extends SiteView{

	public function getTemplate() {
						ob_start();
		if($this->action == null){
			require_once("lib/view/static/home.php");			
		}else{			
				
			switch($this->action) {
				
				
				//===============================================
				// Empresa
				//===============================================
				case 'quemsomos':
					require_once("lib/view/static/quemsomos.php");
					break;
				case 'filosofia':
					require_once("lib/view/static/filosofia.php");
					break;
				case 'compsocial':
					require_once("lib/view/static/compsocial.php");
					break;
				case 'premiacoes':
					require_once("lib/view/static/premiacoes.php");
					break;
				case 'trabconosco':
					require_once("lib/view/static/trabConosco.php");
					break;
				//===============================================
				// Serviços
				//===============================================
				case 'paraempresas':
					require_once("lib/view/static/paraempresas.php");
					break;
				case 'parapessoas':
					require_once("lib/view/static/parapessoas.php");
					break;
					
					//===============================================
					// Para Empresas
					//===============================================
					case 'empAuto':
						require_once("lib/view/static/paraEmpresas/auto.php");
						break;
					case 'empIncendio':
						require_once("lib/view/static/paraEmpresas/incendio.php");
						break;
					case 'empTransporte':
						require_once("lib/view/static/paraEmpresas/transporte.php");
						break;
					case 'empVida':
						require_once("lib/view/static/paraEmpresas/vidagrupo.php");
						break;
					case 'empEngenharia':
						require_once("lib/view/static/paraEmpresas/engenharia.php");
						break;
					case 'empPrev':
						require_once("lib/view/static/paraEmpresas/previdencia.php");
						break;
					case 'empRespSocios':
						require_once("lib/view/static/paraEmpresas/respsocios.php");
						break;
					case 'empRespCivil':
						require_once("lib/view/static/paraEmpresas/respcivil.php");
						break;
					case 'empRiscDiversos':
						require_once("lib/view/static/paraEmpresas/riscdiversos.php");
						break;
						
					//===============================================
					// Para Pessoas
					//===============================================
					case 'pesVida':
						require_once("lib/view/static/paraPessoas/vida.php");
						break;
					case 'pesResidencia':
						require_once("lib/view/static/paraPessoas/residencia.php");
						break;
					case 'pesRespCivil':
						require_once("lib/view/static/paraPessoas/respcivil.php");
						break;
					case 'pesRespProf':
						require_once("lib/view/static/paraPessoas/respprof.php");
						break;
					case 'pesAuto':
						require_once("lib/view/static/paraPessoas/auto.php");
						break;
						
				//===============================================
				// Contato
				//===============================================
				case 'contato':
					require_once("lib/view/static/contato.php");
					break;
				case 'construcao':
					require_once("lib/view/static/construcao.php");
					break;
				case 'ondeEstamos':
					require_once("lib/view/static/ondeEstamos.php");
					break;
				case 'faleConosco':
					require_once("lib/view/static/faleConosco.php");
					break;
				case 'sucesso':
					require_once("lib/view/static/sucesso.php");
					break;
				case 'falha':
					require_once("lib/view/static/falha.php");
					break;
				default:
					require_once("lib/view/static/home.php");
			}
		}				
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
	
}

?>
