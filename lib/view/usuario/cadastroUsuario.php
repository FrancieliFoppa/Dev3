<?php 
?>

<!-- BEGIN PAGE CONTENT-->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="#" class="horizontal-form">
				<div class="form-body">
					<h3 class="form-section">Cadastro de Usu&aacute;rio</h3>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Nome</label>
								<input type="text" id="nome" name="nome" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Senha</label>
								<input type="text" id="senha" name="senha" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Administrador</label>
								<select class="form-control" id="isAdmin" name="isAdmin">
									<option value="0">N&atilde;o</option>
									<option value="1">Sim</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions right">
					<button type="button" class="btn btn-lg btn-theme margintop10 pull-left" id="btSalva">Salva</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$("#btSalva").click(function(){ 
			var dados = "";
			/*
			dados += '&nome='+$("#nome").val();
			dados += '&descricao='+$("#descricao").val();
			dados += '&dataInicio='+$("#inicio").val();
			dados += '&dataFim='+$("#termino").val();

			$.ajax({
				type: "POST",
				url: "?show=evento&action=salvaEvento"+dados,
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				data: '{resourceFileName:"mapedit",culture:"' + $("#lang-name").val() + '"}',
				cache: true,
				async: false, // to set local variable
			});
			*/
		    parent.jQuery.fancybox.close();
		    
		});
	});
</script>