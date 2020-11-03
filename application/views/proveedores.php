<div class="container">
	<h1>Proveedores</h1>
	<p>Registro de todos nuestros proveedores</p>
	<small>¿Quiéres agregar un nuevo proveedor? Ház click aquí</small>
	<a class="btn btn-dark-green btn-sm" href="<?php echo base_url().'Proveedor/agregar_accion';?>"><i class="fal fa-plus-circle"></i> Nuevo proveedor</a>
	<hr>
	<form name="proveedor" action="<?php echo base_url().'Proveedor/accion';?>" method="post">
		<table id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<th class="th-sm">Nombre</th>
				<th class="th-sm">Dirección</th>
				<th class="th-sm">Teléfono</th>
				<th class="th-sm">Acciones</th>
			</thead>
			<tbody>
				<?php foreach($proveedor as $p): ?>
					<tr>
						<td><?=$p->nombre?></td>
						<td><?=$p->direccion?></td>
						<td><?=$p->telefono?></td>
						<td>
							<a class="btn btn-indigo btn-sm" href="<?php echo base_url().'Proveedor/accion/'.$p->idproveedor?>"><i class="fal fa-pencil"></i> Editar</a>
							<a class="ml-5 btn btn-red btn-sm" href="#" data-toggle="modal" data-target="#DeleteProveedor" data-id="<?php echo $p->idproveedor ?>"><i class="fal fa-trash-alt"></i> Eliminar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</form>
</div>

<div class="modal fade" id="DeleteProveedor" tabindex="-1" aria-labelledby="DeleteProveedorLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-dark" id="DeleteProveedorLabel"><strong>¿Seguro que deseas eliminar el registro?</strong></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<small class="text-dark">Presiona "Sí, eliminar" para continuar</small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-indigo btn-sm" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-red btn-sm" id="b-borrar-proveedor">Sí, eliminar</button>
			</div>
		</div>
	</div>
</div>