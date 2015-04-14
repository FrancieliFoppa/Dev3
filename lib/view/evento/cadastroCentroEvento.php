<?php 
?>

<!-- BEGIN PAGE CONTENT-->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="#" class="horizontal-form">
				<div class="form-body">
					<h3 class="form-section">Cadastro de Evento</h3>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Nome</label>
								<input type="text" id="nome" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Centro de Evento</label>
								<select class="form-control" id="isAdmin" name="centroEvento">
									<option value="0">Centro 1</option>
									<option value="1">Centro 2</option>
									<option value="2">Centro 3</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">In&iacute;cio</label>
								<input type="text" id="nome" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">T&eacute;rmino</label>
								<input type="text" id="nome" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Descri&ccedil;&atilde;o</label>
								<textarea rows="4" class="form-control" id="desc"></textarea>
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