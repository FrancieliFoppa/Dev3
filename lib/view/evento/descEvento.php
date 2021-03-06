<?php 
?>

<style type="text/css">
	#table_listaAtividades .odd { cursor: pointer; }
	#table_listaAtividades .even { cursor: pointer; }
	#table_listaAtividades .row { margin-bottom:0px !important; }
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3><small>Eventos </small>- Lista de Eventos - <small> $NomeEvento$</small> </h3>
			<br>
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#dadosEvento" aria-controls="dadosEvento" role="tab" data-toggle="tab">Dados do Evento</a></li>
					<li role="presentation"><a href="#atividades" aria-controls="atividades" role="tab" data-toggle="tab">Atividades</a></li>
					<li role="presentation"><a href="#participantes" aria-controls="participantes" role="tab" data-toggle="tab">Participantes</a></li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="dadosEvento">
						<div class="row">
							<div class="col-lg-1">
								<label>Id</label>
								<p>$id$</p>
							</div>
							<div class="col-lg-5">
								<label>Nome</label>
								<p>$nome$</p>
							</div>
							<div class="col-lg-3">
								<label>In&iacute;cio</label>
								<p>$dtInicio$</p>
							</div>
							<div class="col-lg-3">
								<label>T&eacute;rmino</label>
								<p>$dtFim$</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<label>Descri&ccedil;&atilde;o</label>
								<p>$desc$</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
								<button class="btn btn-lg btn-theme margintop10 pull-left" id="btnEditaEvento">Editar</button>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="atividades">
						<button type="button" class="btn btn-primary" id="btnAddAtividade">Add Atividade</button>
						<table id="table_listaAtividades" class="display" >
							<thead>
								<tr>
									<th>id</th>
									<th>Descri&ccedil;&atilde;o</th>
									<th>Data</th>
									<th>Hora</th>
									<th>Dura&ccedil;&atilde;o</th>
									<th>Valor</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>id</th>
									<th>Descri&ccedil;&atilde;o</th>
									<th>Data</th>
									<th>Hora</th>
									<th>Dura&ccedil;&atilde;o</th>
									<th>Valor</th>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>0</td>
									<td>System uritoqous Architect</td>
									<td>2009/01/12</td>
									<td>11:30</td>
									<td>1h</td>
									<td>155,00</td>
								</tr>
								<tr>
									<td>0</td>
									<td>System uritoqous Architect</td>
									<td>2009/01/12</td>
									<td>11:30</td>
									<td>1h</td>
									<td>155,00</td>
								</tr>
								<tr>
									<td>0</td>
									<td>System uritoqous Architect</td>
									<td>2009/01/12</td>
									<td>11:30</td>
									<td>1h</td>
									<td>155,00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div role="tabpanel" class="tab-pane" id="participantes">
						<table id="table_listaParticipantes" class="display" >
							<thead>
								<tr>
									<th>id</th>
									<th>Nome</th>
									<th>CPF</th>
									<th>Email</th>
									<th>Telefone</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>id</th>
									<th>Nome</th>
									<th>CPF</th>
									<th>Email</th>
									<th>Telefone</th>
								</tr>
							</tfoot>
							
							<!-- DADOS DE SIMULAÇÃO -->
							<tbody>
								<tr>
									<td>0</td>
									<td>Maiglon Alexandre Lubacheuski</td>
									<td>999.999.999.99</td>
									<td>teste@gmail.com</td>
									<td>(51)9999-9999</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Nome Segundo Sobrenome</td>
									<td>999.999.999.98</td>
									<td>teste@gmail.com</td>
									<td>(51)9999-9999</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Teste Participante</td>
									<td>999.999.999.97</td>
									<td>teste@gmail.com</td>
									<td>(51)9999-9999</td>
								</tr>
							</tbody>
							<!-- DADOS DE SIMULAÇÃO -->
						</table>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		// Tabela de Atividades
		var tableAtividades = $('#table_listaAtividades').DataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": true,
			"bInfo": false,
			"bAutoWidth": false,
			"iDisplayLength": 25
		});

		// Tabela de Participantes
		var tableParticipantes = $('#table_listaParticipantes').DataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": true,
			"bInfo": false,
			"bAutoWidth": false,
			"iDisplayLength": 25
		});

		// Edita Evento
		$('#btnEditaEvento').click(function () {
			var content = null;
			$.ajax({
				type: "POST",
				url: '?show=evento&action=cadastroEvento&onlyShow=1',
				contentType: "application/json; charset=utf-8",
				dataType: "html",
				data: '{resourceFileName:"mapedit",culture:"' + $("#lang-name").val() + '"}',
				cache: true,
				async: false, // to set local variable
				success: function(data) {
					content = data;
				}
			});
			$.fancybox.open({
				live: true,
				type: 'html',
				content: content,
				afterClose : function() { 
					//setupPage();
				}
			});
		});

		// Nova Atividade
		$('#btnAddAtividade').click(function () {
			var content = null;
			$.ajax({
				type: "POST",
				url: '?show=atividade&action=cadastroAtividade&onlyShow=1',
				contentType: "application/json; charset=utf-8",
				dataType: "html",
				data: '{resourceFileName:"mapedit",culture:"' + $("#lang-name").val() + '"}',
				cache: true,
				async: false, // to set local variable
				success: function(data) {
					content = data;
				}
			});
			$.fancybox.open({
				live: true,
				type: 'html',
				content: content,
				afterClose : function() { 
					//setupPage();
				}
			});
		});

		// Edita Atividade
		$('#table_listaAtividades tbody').on('click', 'tr', function () {
			var id = tableAtividades.row(this).data()[0];
			var content = null;
			$.ajax({
				type: "POST",
				url: '?show=atividade&action=cadastroAtividade&onlyShow=1',
				contentType: "application/json; charset=utf-8",
				dataType: "html",
				data: '{resourceFileName:"mapedit",culture:"' + $("#lang-name").val() + '"}',
				cache: true,
				async: false, // to set local variable
				success: function(data) {
					content = data;
				}
			});
			$.fancybox.open({
				live: true,
				type: 'html',
				content: content,
				afterClose : function() { 
					//setupPage();
				}
			});
		});
	});
</script>