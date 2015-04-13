<?php 
?>

<!-- BEGIN PAGE CONTENT-->

<div class="container">
	<div class="row">
		<form action="#" class="horizontal-form">
			<div class="form-body">
				<h3 class="form-section">Edi&ccedil;&atilde;o de Atividade</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Nome</label>
							<input type="text" id="nome" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label">In&iacute;cio</label>
							<input type="text" id="nome" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
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
			
				<div class="col-lg-2"><button type="button" class="btn btn-lg btn-theme margintop10 pull-left" id="btSalva">Salvar</button></div>
				
				<!-- TODO: Validar se é edição ou nova atividade, se é nova, não exibir esse botão-->
				<div class="col-lg-3"><button type="button" class="btn btn-lg btn-red margintop10 pull-left" id="btRemove">Remove Atividade</button></div>
			</div>
		</form>
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