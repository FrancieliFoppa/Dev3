<?php 
?>

<style type="text/css">
	.odd { cursor: pointer; }
	.even { cursor: pointer; }
</style>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Eventos <small> - Centros de Evento</small></h3>
			<br>
			<button type="button" class="btn btn-primary" id="btnAddCentro">Add Centro de Evento</button>
			<table id="table_listaCentros" class="display" >
				<thead>
					<tr>
						<th>id</th>
						<th>Endere&ccedil;o</th>
						<th>CEP</th>
						<th>Cidade</th>
						<th>Estado</th>
						<th>Pais</th>
						<th>Capacidade</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Endere&ccedil;o</th>
						<th>CEP</th>
						<th>Cidade</th>
						<th>Estado</th>
						<th>Pais</th>
						<th>Capacidade</th>
					</tr>
				</tfoot>
				
				<!-- DADOS DE SIMULAÇÃO -->
				<tbody>
					<tr>
						<td>0</td>
						<td>Rua Teste, 123</td>
						<td>99999-999</td>
						<td>Cidade1</td>
						<td>Estado1</td>
						<td>Brasil</td>
						<td>1000</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Rua Teste, 123</td>
						<td>99999-999</td>
						<td>Cidade1</td>
						<td>Estado1</td>
						<td>Brasil</td>
						<td>1000</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Rua Teste, 123</td>
						<td>99999-999</td>
						<td>Cidade1</td>
						<td>Estado1</td>
						<td>Brasil</td>
						<td>1000</td>
					</tr>
				</tbody>
				<!-- DADOS DE SIMULAÇÃO -->
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		
		$('#btnAddCentro').click(function () {
			var content = null;
			$.ajax({
				type: "POST",
				url: '?show=evento&action=cadastroCentroEvento&onlyShow=1',
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

		var table = $('#table_listaCentros').DataTable({
		    "bPaginate": true,
		    "bLengthChange": false,
		    "bFilter": true,
		    "bInfo": false,
		    "bAutoWidth": false,
		    "iDisplayLength": 15 
		});
		
		$('#table_listaCentros tbody').on('click', 'tr', function () {
			var id = table.row(this).data()[0];
			$.ajax({
				type: "POST",
				url: '?show=evento&action=cadastroCentroEvento&onlyShow=1&cod'+id,
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