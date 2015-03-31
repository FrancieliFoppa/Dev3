<?php 
?>

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
									<button class="btn btn-lg btn-theme margintop10 pull-left" onClick="loginParticipante()" type="submit" id="btLoginParticipante">Acessar</button>
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
								<button class="btn btn-lg btn-theme margintop10 pull-left" onClick="loginUsuario()" id="btLoginUsuario">Acessar</button>
							<div id="usuario-error" class="col-lg-6 margintop20 ">
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	function loginParticipante(){
		alert(1);
	}

	function loginUsuario(){
		if($("#usuarioLogin").val() == "" || $("#usuarioSenha").val() == ""){
			$("#usuario-error").html("Usu&aacute;rio ou senha em branco!");
			$("#usuario-error").fadeIn(500);
		}else{
			$.getJSON("?ajax=1&show=login&action=loginUsuario&user="+$("#usuarioLogin").val()+"&pass="+$("#usuarioSenha").val(),
				function (json){
					if(json.error == ""){
						window.location.href = "?show="+json.nextAction;										
					}else{
						$("#usuario-error").html(json.error);
						$("#usuario-error").fadeIn(500);
					}
				}
			);
		}
	}

</script>