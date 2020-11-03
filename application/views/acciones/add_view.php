<?php if($page_title == 'Agregar producto'){ ?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="add_producto" action="<?=base_url().'Productos/agregar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Nombre</label>
					<input class="form-control" type="text" name="nombre" id="nombre" required>
					<small class="form-text text-muted">Escriba el producto</small>
				</div>

				<div class="form-group col-md-4">
					<label>Precio base</label>
					<input class="form-control" type="text" name="precio_base" id="precio_base" required>
					<small class="form-text text-muted">Puede utilizar . para los decimales</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>Costo</label>
					<input class="form-control" type="text" name="costo" id="costo" required>
					<small class="form-text text-muted">Puede utilizar . para los decimales</small>
				</div>

				<div class="form-group col-md-4">
					<label>¿Se encuentra disponible en el sitio web?</label>
					<select class="form-control" name="disponible_website" id="disponible_website" required>
						<option value="">Selecciona una opción</option>
						<option value="1">Sí</option>
						<option value="0">No</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm" style="color: yellow; margin:0;" type="button" id="agrega_producto"><i class="fal fa-plus-circle"></i> Agregar producto</button>
				</div>
			</div>	
		</form>
	</div>

<?php }elseif($page_title == 'Agregar tienda'){ ?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="add_tienda" action="<?=base_url().'Tienda/agregar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Nombre</label>
					<input class="form-control" type="text" name="nombre" id="nombre" required>
					<small class="form-text text-muted">Escriba el nombre de la tienda</small>
				</div>

				<div class="form-group col-md-4">
					<label>Ubicación</label>
					<input class="form-control" type="text" name="ubicacion" id="ubicacion" required>
					<small class="form-text text-muted">Digite la dirección de su tienda</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>¿Cuenta con bodega su tienda?</label>
					<select class="form-control" name="bodega" id="bodega" required>
						<option value="">Selecciona una opción</option>
						<option value="1">Sí</option>
						<option value="0">No</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm" style="color: yellow; margin:0;" type="button" id="agrega_tienda"><i class="fal fa-plus-circle"></i> Agregar tienda</button>
				</div>
			</div>	
		</form>
	</div>

<?php }elseif($page_title == 'Agregar proveedor'){ ?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="add_proveedor" action="<?=base_url().'Proveedor/agregar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Nombre</label>
					<input class="form-control" type="text" name="nombre" id="nombre" required>
					<small class="form-text text-muted">Escriba el nombre del proveedor</small>
				</div>

				<div class="form-group col-md-4">
					<label>Dirección</label>
					<input class="form-control" type="text" name="direccion" id="direccion" required>
					<small class="form-text text-muted">Digite la dirección de su proveedor</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>Teléfono</label>
					<input class="form-control" type="text" name="telefono" id="telefono" required>
					<small class="form-text text-muted">Escriba con guiones el teléfono</small>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm" style="color: yellow; margin:0;" type="button" id="agrega_proveedor"><i class="fal fa-plus-circle"></i> Agregar proveedor</button>
				</div>
			</div>	
		</form>
	</div>

<?php }elseif($page_title == 'Agregar pago'){ ?>

	<div class="container">
		<h1 class="titulo"><?=$icon;?> <?=$page_title;?></h1>
		<hr>
		<form name="add_pago" action="<?=base_url().'Pago/agregar';?>" method="post" autocomplete="off">
			<div class="row">
				<div class="form_group col-md-4">
					<label>Descripción</label>
					<input class="form-control" type="text" name="descripcion" id="descripcion" required>
					<small class="form-text text-muted">Escriba el método de pago</small>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<button class="btn success-color-dark btn-sm mt-4" style="color: yellow; margin:0;" type="button" id="agrega_pago"><i class="fal fa-plus-circle"></i> Agregar método de pago</button>
				</div>
			</div>	
		</form>
	</div>

<?php } ?>

