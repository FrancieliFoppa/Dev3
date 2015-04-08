<?php 
?>

<style type="text/css">
	.row{ margin-bottom:0px !important; }
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3><small>Eventos </small>- Lista de Eventos - <small> $NomeEvento$</small> </h3>
			<br>

			<div role="tabpanel">
			
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
					<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home"><table id="table_listaEventos" class="display" >
				<thead>
					<tr>
						<th>id</th>
						<th>Nome</th>
						<th>Descri&ccedil;&atilde;o</th>
						<th>Data In&iacute;cio</th>
						<th>Data Fim</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Nome</th>
						<th>Descri&ccedil;&atilde;o</th>
						<th>Data In&iacute;cio</th>
						<th>Data Fim</th>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td>0</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>2009/01/12</td>
						<td>2011/04/25</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>2011/07/25</td>
						<td>2011/07/25</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Junior Technical Author</td>
						<td>San Francisco</td>
						<td>2009/01/12</td>
						<td>2009/01/12</td>
					</tr>
				</tbody>
			</table>
				</div>
					<div role="tabpanel" class="tab-pane" id="profile">2</div>
					<div role="tabpanel" class="tab-pane" id="messages">3</div>
					<div role="tabpanel" class="tab-pane" id="settings">4</div>
				</div>
			
			</div>			
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){

		$('#myTab a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
		})
		
		var table = $('#table_listaEventos').DataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": true,
			"bInfo": false,
			"bAutoWidth": false,
			"iDisplayLength": 50 
		});
		/*
		$('#table_listaEventos tbody').on('click', 'tr', function () {
			var id = table.row(this).data()[0];
			window.location.href = "?show=evento&action=descEvento&cod="+id;
		});
		*/
	});
</script>