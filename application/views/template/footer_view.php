
<!-- Footer -->
<footer class="page-footer">
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">&copy; 2020 Copyright:
		<a href="http://ronaldorellana.herokuapp.com/" target="_blank"> Ronald Orellana</a>
	</div>
</footer>
</body>
<script src="<?=base_url().'assets/js/jquery-3.5.1.min.js';?>"></script>
<script src="<?=base_url().'assets/js/popper.js';?>"></script>
<script src="<?=base_url().'assets/js/bootstrap.min.js';?>"></script>
<script src="<?=base_url().'assets/js/mdb.min.js';?>"></script>
<script src="<?=base_url().'assets/js/addons/datatables.min.js';?>"></script>
<script src="<?=base_url().'assets/js/main.js';?>"></script>
<script src="<?=base_url().'assets/js/add.js';?>"></script>
<script>
	$(document).ready(function () {
		$('#table').DataTable();
		$('.dataTables_length').addClass('bs-select');
	});

	// Tooltips Initialization
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>

</html>