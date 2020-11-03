/* PRODUCTOS */
/* ADD */

$('#agrega_producto').click(function(){
	var nombre = $('#nombre').val(),
	precio_base = $('#precio_base').val(),
	costo = $('#costo').val(),
	disponible_website = $('#disponible_website').val();

	$.ajax({
		dataType:'json',
		url: baseurl + '/Productos/agregar',
		type: 'post',
		dataType: 'json',
		data:{
			nombre,precio_base,costo,disponible_website
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros almacenados');
				document.location.href = baseurl + '/Productos';
			}else{
				alert('No se almacenaron los datos');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de agregar');
			console.log(e);
		}
	});
});

/* UPDATE */
$('#actua_producto').click(function(){
	var id_codigo = $('#id_codigo').val(),
	nombre = $('#nombre').val(),
	precio_base = $('#precio_base').val(),
	costo = $('#costo').val(),
	disponible_website = $('#disponible_website').val();
	$.ajax({
		dataType:'json',
		url: baseurl + '/Productos/editar',
		type:'post',
		dataType:'json',
		data:{
			id_codigo,nombre,precio_base,costo,disponible_website
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros actualizados');
				document.location.href = baseurl + '/Productos/index';
			}else{
				alert('No se pudo actualizar');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de actualizar');
			console.log(e);
		}
	});
});


/* TIENDAS */
/* ADD */

$('#agrega_tienda').click(function(){
	var nombre = $('#nombre').val(),
	ubicacion = $('#ubicacion').val(),
	bodega = $('#bodega').val();

	$.ajax({
		dataType:'json',
		url: baseurl + '/Tienda/agregar',
		type: 'post',
		dataType: 'json',
		data:{
			nombre,ubicacion,bodega
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros almacenados');
				document.location.href = baseurl + '/Tienda';
			}else{
				alert('No se almacenaron los datos');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de agregar');
			console.log(e);
		}
	});
});

/* UPDATE */
$('#actua_tienda').click(function(){
	var idtienda = $('#idtienda').val(),
	nombre = $('#nombre').val(),
	ubicacion = $('#ubicacion').val(),
	bodega = $('#bodega').val();
	$.ajax({
		dataType:'json',
		url: baseurl + '/Tienda/editar',
		type:'post',
		dataType:'json',
		data:{
			idtienda,nombre,ubicacion,bodega
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros actualizados');
				document.location.href = baseurl + '/Tienda/index';
			}else{
				alert('No se pudo actualizar');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de actualizar');
			console.log(e);
		}
	});
});


/* PROVEEDORES */
/* ADD */

$('#agrega_proveedor').click(function(){
	var nombre = $('#nombre').val(),
	direccion = $('#direccion').val(),
	telefono = $('#telefono').val();

	$.ajax({
		dataType:'json',
		url: baseurl + '/Proveedor/agregar',
		type: 'post',
		dataType: 'json',
		data:{
			nombre,direccion,telefono
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros almacenados');
				document.location.href = baseurl + '/Proveedor';
			}else{
				alert('No se almacenaron los datos');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de agregar');
			console.log(e);
		}
	});
});

/* UPDATE */
$('#actua_proveedor').click(function(){
	var idproveedor = $('#idproveedor').val(),
	nombre = $('#nombre').val(),
	direccion = $('#direccion').val(),
	telefono = $('#telefono').val();
	$.ajax({
		dataType:'json',
		url: baseurl + '/Proveedor/editar',
		type:'post',
		dataType:'json',
		data:{
			idproveedor,nombre,direccion,telefono
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros actualizados');
				document.location.href = baseurl + '/Proveedor/index';
			}else{
				alert('No se pudo actualizar');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de actualizar');
			console.log(e);
		}
	});
});


/* METODOS DE PAGO */
/* ADD */

$('#agrega_pago').click(function(){
	var descripcion = $('#descripcion').val();

	$.ajax({
		dataType:'json',
		url: baseurl + '/Pago/agregar',
		type: 'post',
		dataType: 'json',
		data:{
			descripcion
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros almacenados');
				document.location.href = baseurl + '/Pago';
			}else{
				alert('No se almacenaron los datos');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de agregar');
			console.log(e);
		}
	});
});

/* UPDATE */
$('#actua_pago').click(function(){
	var idtipopago = $('#idtipopago').val(),
	descripcion = $('#descripcion').val();
	$.ajax({
		dataType:'json',
		url: baseurl + '/Pago/editar',
		type:'post',
		dataType:'json',
		data:{
			idtipopago,descripcion
		},
		dataType:'json',
		beforesend: function(){
			//gif de carga
		},
		success: function(data){
			if(data.success === 1){
				alert('Registros actualizados');
				document.location.href = baseurl + '/Pago/index';
			}else{
				alert('No se pudo actualizar');
			}
		},
		error: function(e){
			alert('Ocurrió un error al momento de actualizar');
			console.log(e);
		}
	});
});
