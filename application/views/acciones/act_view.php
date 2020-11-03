<?php if($page_title == 'Editar producto'){ ?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="update_producto" action="<?=base_url().'Productos/editar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Nombre</label>
					<input class="form-control" type="text" name="nombre" id="nombre" value="<?=$producto->nombre;?>" required>
					<small class="form-text text-muted">Escriba el producto</small>
				</div>

				<div class="form-group col-md-4">
					<label>Precio base</label>
					<input class="form-control" type="text" name="precio_base" id="precio_base" value="<?=$producto->precio_base;?>" required>
					<small class="form-text text-muted">Puede utilizar . para los decimales</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>Costo</label>
					<input class="form-control" type="text" name="costo" id="costo" value="<?=$producto->costo;?>" required>
					<small class="form-text text-muted">Puede utilizar . para los decimales</small>
				</div>

				<div class="form-group col-md-4">
					<label>¿Se encuentra disponible en el sitio web?</label>
					<input class="form-control" type="text" name="disponible_website" id="disponible_website" value="<?=$producto->disponible_website;?>" required>
					<small class="form-text text-muted">Puede utilizar 1 o 0 donde 1 es "Sí" y 0 es "No"</small>
				</div>
			</div>
			<div class="row">
				<div>
					<input type="hidden" name="id_codigo" id="id_codigo" value="<?=$producto->id_codigo?>">
				</div>
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm" style="color: yellow; margin:0;" type="button" id="actua_producto"><i class="fal fa-check"></i> Guardar cambios</button>
				</div>
			</div>	
		</form>
	</div>

<?php }elseif($page_title == 'Editar tienda'){ ?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="update_tienda" action="<?=base_url().'Tienda/editar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Nombre</label>
					<input class="form-control" type="text" name="nombre" id="nombre" value="<?=$tienda->nombre;?>" required>
					<small class="form-text text-muted">Escriba el nombre de la tienda</small>
				</div>

				<div class="form-group col-md-4">
					<label>Ubicación</label>
					<input class="form-control" type="text" name="ubicacion" id="ubicacion" value="<?=$tienda->ubicacion;?>" required>
					<small class="form-text text-muted">Digite la dirección de su tienda</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>¿Cuenta con bodega su tienda?</label>
					<input class="form-control" type="text" name="bodega" id="bodega" value="<?=$tienda->bodega;?>" required>
					<small class="form-text text-muted">Puede utilizar 1 o 0 donde 1 es "Sí" y 0 es "No"</small>
				</div>
			</div>
			<div class="row">
				<div>
					<input type="hidden" name="idtienda" id="idtienda" value="<?=$tienda->idtienda?>">
				</div>
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm" style="color: yellow; margin:0;" type="button" id="actua_tienda"><i class="fal fa-check"></i> Guardar cambios</button>
				</div>
			</div>	
		</form>
	</div>

<?php }elseif($page_title == 'Editar proveedor'){ ?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="update_proveedor" action="<?=base_url().'Proveedor/editar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Nombre</label>
					<input class="form-control" type="text" name="nombre" id="nombre" value="<?=$proveedor->nombre;?>" required>
					<small class="form-text text-muted">Escriba el nombre del proveedor</small>
				</div>

				<div class="form-group col-md-4">
					<label>Dirección</label>
					<input class="form-control" type="text" name="direccion" id="direccion" value="<?=$proveedor->direccion;?>" required>
					<small class="form-text text-muted">Digite la dirección de su proveedor</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>Teléfono</label>
					<input class="form-control" type="text" name="telefono" id="telefono" value="<?=$proveedor->telefono;?>" required>
					<small class="form-text text-muted">Escriba con guiones el teléfono</small>
				</div>
			</div>
			<div class="row">
				<div>
					<input type="hidden" name="idproveedor" id="idproveedor" value="<?=$proveedor->idproveedor?>">
				</div>
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm" style="color: yellow; margin:0;" type="button" id="actua_proveedor"><i class="fal fa-check"></i> Guardar cambios</button>
				</div>
			</div>	
		</form>
	</div>

<?php }elseif($page_title == 'Editar pago'){?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="update_pago" action="<?=base_url().'Pago/editar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Descripción</label>
					<input class="form-control" type="text" name="descripcion" id="descripcion" value="<?=$pago->descripcion;?>" required>
					<small class="form-text text-muted">Escriba el método de pago</small>
				</div>
			</div>
			<div class="row">
				<div>
					<input type="hidden" name="idtipopago" id="idtipopago" value="<?=$pago->idtipopago?>">
				</div>
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm mt-4" style="color: yellow; margin:0;" type="button" id="actua_pago"><i class="fal fa-check"></i> Guardar cambios</button>
				</div>
			</div>	
		</form>
	</div>

<?php } ?>

