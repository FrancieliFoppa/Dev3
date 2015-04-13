<?php 
?>

<style type="text/css">
	.odd { cursor: pointer; }
	.even { cursor: pointer; }
</style>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Usuarios <small> - Lista de Usuarios</small></h3>
			<br>
			<button type="button" class="btn btn-primary" id="btnAddUsuario">Add Usuario</button>
			<table id="table_listaUsuarios" class="display" >
				<thead>
					<tr>
						<th>id</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Admin</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Admin</th>
					</tr>
				</tfoot>
				
				<!-- DADOS DE SIMULAÇÃO -->
				<tbody>
					<tr>
						<td>0</td>
						<td>System</td>
						<td>teste@gmail.com</td>
						<td>N&atilde;o</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Maiglon</td>
						<td>maiglonl@gmail.com</td>
						<td>Sim</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Teste</td>
						<td>teste@gmail.com</td>
						<td>N&atilde;o</td>
					</tr>
				</tbody>
				<!-- DADOS DE SIMULAÇÃO -->
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		
		$('#btnAddUsuario').click(function () {
			var content = null;
			
			$.ajax({
				type: "POST",
				url: '?show=usuario&action=cadastroUsuario&onlyShow=1',
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

		var table = $('#table_listaUsuarios').DataTable({
		    "bPaginate": true,
		    "bLengthChange": false,
		    "bFilter": true,
		    "bInfo": false,
		    "bAutoWidth": false,
		    "iDisplayLength": 15 
		});
		
		$('#table_listaUsuarios tbody').on('click', 'tr', function () {
			var id = table.row(this).data()[0];
		    window.location.href = "?show=evento&action=descUsuario&cod="+id;
		});
	});
</script>