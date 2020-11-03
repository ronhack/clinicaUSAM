<div class="container">
	<h1>Método de pago</h1>
	<p>Registro de todos nuestros métodos de pago</p>
	<small>¿Quiéres agregar un nuevo método de pago? Ház click aquí</small>
	<a class="btn btn-dark-green btn-sm" href="<?php echo base_url().'Pago/agregar_accion';?>"><i class="fal fa-plus-circle"></i> Nuevo método de pago</a>
	<hr>
	<form name="pago" action="<?php echo base_url().'Pago/accion';?>" method="post">
		<table id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<th class="th-sm">Descripción</th>
				<th class="th-sm">Acciones</th>
			</thead>
			<tbody>
				<?php foreach($pago as $p): ?>
					<tr>
						<td><?=$p->descripcion?></td>
						<td>
							<a class="btn btn-indigo btn-sm" href="<?php echo base_url().'Pago/accion/'.$p->idtipopago?>"><i class="fal fa-pencil"></i> Editar</a>
							<a class="ml-5 btn btn-red btn-sm" href="#" data-toggle="modal" data-target="#DeletePago" data-id="<?php echo $p->idtipopago ?>"><i class="fal fa-trash-alt"></i> Eliminar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</form>
</div>

<div class="modal fade" id="DeletePago" tabindex="-1" aria-labelledby="DeletePagoLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-dark" id="DeletePagoLabel"><strong>¿Seguro que deseas eliminar el registro?</strong></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<small class="text-dark">Presiona "Sí, eliminar" para continuar</small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-indigo btn-sm" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-red btn-sm" id="b-borrar-pago">Sí, eliminar</button>
			</div>
		</div>
	</div>
</div>