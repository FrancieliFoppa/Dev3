<?php 
?>

<style type="text/css">
	.odd { cursor: pointer; }
	.even { cursor: pointer; }
</style>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3>Participantes <small> - Lista de Participantes</small></h3>
			<br>
			<button type="button" class="btn btn-primary" id="btnAddParticipante">Add Participante</button>
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
						<td>999.999.999.99</td>
						<td>teste@gmail.com</td>
						<td>(51)9999-9999</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Teste Participante</td>
						<td>999.999.999.99</td>
						<td>teste@gmail.com</td>
						<td>(51)9999-9999</td>
					</tr>
				</tbody>
				<!-- DADOS DE SIMULAÇÃO -->
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){

		var table = $('#table_listaParticipantes').DataTable({
		    "bPaginate": true,
		    "bLengthChange": false,
		    "bFilter": true,
		    "bInfo": false,
		    "bAutoWidth": false,
		    "iDisplayLength": 15 
		});
		
		$('#table_listaParticipantes tbody').on('click', 'tr', function () {
			var id = table.row(this).data()[0];
			$.ajax({
				type: "POST",
				url: '?show=participante&action=cadastroParticipante&onlyShow=1&cod='+id,
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

		$('#btnAddParticipante').click(function () {
			var content = null;
			$.ajax({
				type: "POST",
				url: '?show=participante&action=cadastroParticipante&onlyShow=1',
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