<div class="container">
	<h1>Tienda</h1>
	<p>Registro de todas nuestras tiendas</p>
	<small>¿Quiéres agregar una nueva tienda? Ház click aquí</small>
	<a class="btn btn-dark-green btn-sm" href="<?php echo base_url().'Tienda/agregar_accion';?>"><i class="fal fa-plus-circle"></i> Nueva tienda</a>
	<hr>
	<form name="tienda" action="<?php echo base_url().'Tienda/accion';?>" method="post">
		<table id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<th class="th-sm">Nombre</th>
				<th class="th-sm">Ubicación</th>
				<th class="th-sm">Bodega</th>
				<th class="th-sm">Acciones</th>
			</thead>
			<tbody>
				<?php foreach($tienda as $t): ?>
					<tr>
						<td><?=$t->nombre?></td>
						<td><?=$t->ubicacion?></td>
						<td><?=($t->bodega == 1) ? "Sí" : "No";?></td>
						<td>
							<a class="btn btn-indigo btn-sm" href="<?php echo base_url().'Tienda/accion/'.$t->idtienda?>"><i class="fal fa-pencil"></i> Editar</a>
							<a class="ml-5 btn btn-red btn-sm" href="#" data-toggle="modal" data-target="#DeleteTienda" data-id="<?php echo $t->idtienda ?>"><i class="fal fa-trash-alt"></i> Eliminar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</form>
</div>

<div class="modal fade" id="DeleteTienda" tabindex="-1" aria-labelledby="DeleteTiendaLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-dark" id="DeleteTiendaLabel"><strong>¿Seguro que deseas eliminar el registro?</strong></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<small class="text-dark">Presiona "Sí, eliminar" para continuar</small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-indigo btn-sm" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-red btn-sm" id="b-borrar-tienda">Sí, eliminar</button>
			</div>
		</div>
	</div>
</div>