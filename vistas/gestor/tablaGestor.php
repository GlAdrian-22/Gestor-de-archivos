<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-hover table-dark" id="tableGestorDataTable">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Tipo de archivo</th>
						<th>Descargar</th>
						<th>Visualizar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<span class="btn btn-danger btn-sm">
								<span class="fas fa-trash"></span>
							</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tableGestorDataTable').DataTable();
	});
</script>