<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="Maiglon Lubacheuski, Eduardo Reis, Francieli Foppa, Denis Vidal" />
		
		<title>Trab DS3</title>
		<!-- css -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<link href="css/skin.css" rel="stylesheet" />
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">DS<span>3</span></a>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		
		
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pricing-box-alt special">
							<div class="pricing-heading">
								<h3>Acessar como <strong>Participante</strong></h3>
							</div>
						</div>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active">
								<form id="participanteForm" action="" method="post" class="validateform" name="send-contact">
									<div class="row">
										<div class="col-lg-6 field">
											<label>Login:</label>
											<input type="text" name="login" id="participanteLogin" />
										</div>
										<div class="col-lg-6 field">
											<label>Senha:</label>
											<input type="text" name="senha" id="participanteSenha"/>
										</div>
										<div class="col-lg-12 margintop10 field">
											<p>
												<button class="btn btn-lg btn-theme margintop10 pull-left" type="submit" id="btLoginParticipante">Acessar</button>
											</p>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="pricing-box-alt special">
							<div class="pricing-heading">
								<h3>Acessar como <strong>Usu&aacute;rio</strong></h3>
							</div>
						</div>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active">
								<form id="usuarioForm" action="" method="post" class="validateform" name="send-contact">
									<div class="row">
										<div class="col-lg-6 field">
											<label>Login:</label>
											<input type="text" name="login" id="usuarioLogin"/>
										</div>
										<div class="col-lg-6 field">
											<label>Senha:</label>
											<input type="text" name="senha" id="usuarioSenha"/>
										</div>
										<div class="col-lg-12 margintop10 field">
											<p>
												<button class="btn btn-lg btn-theme margintop10 pull-left" type="submit" id="btLoginUsuario">Acessar</button>
											</p>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<footer>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p><span> UNISINOS | Desenvolvimento de Software 3 - 2015/1 </span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript">

	$("#btLoginParticipante").click(function(){
		alert(1);
		// Request JSON from login controller
		// Falta implementar sistema de login
		/*$.getJSON("?ajax=1&show=login&action=login&user="+user+"&pass="+$.md5(pass),
			function (json){
				// if there is no error reported from the server
				// present the new page in the central content
				if(json.error == ""){
					window.location = "?show="+json.nextAction;										
				}else{
					// show error panel
				}
			}
		);*/
		window.location.href = "?show=participante&action=home";
	});

	$("#btLoginUsuario").click(function(){
		window.location = "?show=usuario&action=home";
	});

	</script>
	
	</body>
</html>