var baseurl = 'http://localhost/clinicaUSAM';

/* Productos */
var id;
var link;
$('#DeleteProducto').on('show.bs.modal', function (event) {
  link = $(event.relatedTarget) // Button that triggered the modal
  id = link.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text()
})

/* Eliminar */
$("#b-borrar-producto").click(function(){
	$.ajax({
		url: baseurl + '/Productos/borrar_ajax/'+id,
		context: document.body
	}).done(function (){
		$("#DeleteProducto").modal('hide');
		$(link).parent().parent().remove();
	});
});


/* Eliminar Tiendas */
$('#DeleteTienda').on('show.bs.modal', function (event) {
  link = $(event.relatedTarget) // Button that triggered the modal
  id = link.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text()
})

/* Eliminar */
$("#b-borrar-tienda").click(function(){
	$.ajax({
		url: baseurl + '/Tienda/borrar_ajax/'+id,
		context: document.body
	}).done(function (){
		$("#DeleteTienda").modal('hide');
		$(link).parent().parent().remove();
	});
});

/* Eliminar proveedores */

$('#DeleteProveedor').on('show.bs.modal', function (event) {
  link = $(event.relatedTarget) // Button that triggered the modal
  id = link.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text()
})

/* Eliminar */
$("#b-borrar-proveedor").click(function(){
	$.ajax({
		url: baseurl + '/Proveedor/borrar_ajax/'+id,
		context: document.body
	}).done(function (){
		$("#DeleteProveedor").modal('hide');
		$(link).parent().parent().remove();
	});
});


/* Eliminar pago */

$('#DeletePago').on('show.bs.modal', function (event) {
  link = $(event.relatedTarget) // Button that triggered the modal
  id = link.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text()
})

/* Eliminar */
$("#b-borrar-pago").click(function(){
	$.ajax({
		url: baseurl + '/Pago/borrar_ajax/'+id,
		context: document.body
	}).done(function (){
		$("#DeletePago").modal('hide');
		$(link).parent().parent().remove();
	});
});