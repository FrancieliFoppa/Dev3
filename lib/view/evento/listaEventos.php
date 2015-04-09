<?php 
?>

<style type="text/css">
	.odd { cursor: pointer; }
	.even { cursor: pointer; }
</style>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Eventos <small> - Lista de Eventos</small></h3>
			<br>
			<button type="button" class="btn btn-primary" id="btnAddEvento">Add Evento</button>
			<table id="table_listaEventos" class="display" >
				<thead>
					<tr>
						<th>id</th>
						<th>Nome</th>
						<th>Participantes</th>
						<th>Data In&iacute;cio</th>
						<th>Data Fim</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Nome</th>
						<th>Participantes</th>
						<th>Data In&iacute;cio</th>
						<th>Data Fim</th>
					</tr>
				</tfoot>
				
				<!-- DADOS DE SIMULAÇÃO -->
				<tbody>
					<tr>
						<td>0</td>
						<td>System Architect</td>
						<td>12</td>
						<td>2009/01/12</td>
						<td>2011/04/25</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Accountant</td>
						<td>15</td>
						<td>2011/07/25</td>
						<td>2011/07/25</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Junior Technical Author</td>
						<td>0</td>
						<td>2009/01/12</td>
						<td>2009/01/12</td>
					</tr>
				</tbody>
				<!-- DADOS DE SIMULAÇÃO -->
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#btnAddEvento').click(function () {
			$.fancybox('<h1>Lorem lipsum</h1>');
		});
		
		var table = $('#table_listaEventos').DataTable({
		    "bPaginate": true,
		    "bLengthChange": false,
		    "bFilter": true,
		    "bInfo": false,
		    "bAutoWidth": false,
		    "iDisplayLength": 5 
		});
		
		$('#table_listaEventos tbody').on('click', 'tr', function () {
			var id = table.row(this).data()[0];
		    window.location.href = "?show=evento&action=descEvento&cod="+id;
		});
	});
</script>