<div class="container">
	<h1>Productos</h1>
	<p>Registro de todos nuestros productos</p>
	<small>¿Quiéres agregar un nuevo producto? Ház click aquí</small>
	<a class="btn btn-dark-green btn-sm" href="<?php echo base_url().'Productos/agregar_accion';?>"><i class="fal fa-plus-circle"></i> Nuevo producto</a>
	<hr>
	<form name="producto" action="<?php echo base_url().'Productos/accion';?>" method="post">
		<table id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<th class="th-sm">Nombre</th>
				<th class="th-sm">Precio base</th>
				<th class="th-sm">Costo</th>
				<th class="th-sm">Website</th>
				<?php if($this->session->userdata('id_rol') == 1): ?>
					<th class="th-sm">Acciones</th>
				<?php endif; ?>
			</thead>
			<tbody>
				<?php foreach($producto as $p): ?>
					<tr>
						<td><?=$p->nombre?></td>
						<td>$ <?=$p->precio_base?></td>
						<td>$ <?=$p->costo?></td>
						<td><?=($p->disponible_website) ? "Sí" : "No";?></td>
						<?php if($this->session->userdata('id_rol') == 1): ?>
							<td>
								<a class="btn btn-indigo btn-sm" href="<?php echo base_url().'Productos/accion/'.$p->id_codigo?>"><i class="fal fa-pencil"></i> Editar</a>
								<a class="ml-5 btn btn-red btn-sm" href="#" data-toggle="modal" data-target="#DeleteProducto" data-id="<?php echo $p->id_codigo ?>"><i class="fal fa-trash-alt"></i> Eliminar</a>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</form>
</div>

<div class="modal fade" id="DeleteProducto" tabindex="-1" aria-labelledby="DeleteProductoLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-dark" id="DeleteProductoLabel"><strong>¿Seguro que deseas eliminar el registro?</strong></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<small class="text-dark">Presiona "Sí, eliminar" para continuar</small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-indigo btn-sm" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-red btn-sm" id="b-borrar-producto">Sí, eliminar</button>
			</div>
		</div>
	</div>
</div>