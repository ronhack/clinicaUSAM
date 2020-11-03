<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Ronald Orellana">
	<meta name="description" content="Sistema web para clinica medica">
	<title><?=$page_title;?></title>	
	<link rel="icon" type="image/png" href="<?=base_url().'assets/img/favicon.png';?>">
	<!-- Librerías y estilos CSS -->
	<link rel="stylesheet" href="<?=base_url().'assets/icon/css/all.css';?>">
	<link rel="stylesheet" href="<?=base_url().'assets/icon/css/all.min.css';?>">
	<link rel="stylesheet" href="<?=base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" href="<?=base_url().'assets/css/mdb.min.css';?>">
	<link rel="stylesheet" href="<?=base_url().'assets/css/addons/datatables.min.css';?>">
	<link rel="stylesheet" href="<?=base_url().'assets/css/style.css';?>">
</head>
<body>
	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg pink darken-4">
		<!-- Navbar brand -->
		<a class="navbar-brand text-white" href="<?=base_url();?>"><strong><?=$icon;?> <?=$page_title;?></strong></a>
		<?php if($this->session->userdata('login') === TRUE): ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fal fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url();?>" data-toggle="tooltip" data-placement="top" title="Inicio">
							<i class="fal fa-clinic-medical"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('Productos');?>" data-toggle="tooltip" data-placement="top" title="Productos">
							<i class="fal fa-pills"></i>
						</a>
					</li>
					<?php if($this->session->userdata('id_rol') == 1): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('Tienda');?>" data-toggle="tooltip" data-placement="top" title="Tienda">
								<i class="fal fa-cart-plus"></i>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="<?=base_url('Proveedor');?>" data-toggle="tooltip" data-placement="top" title="Proveedor">
								<i class="fal fa-user-friends"></i>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="<?=base_url('Pago');?>" data-toggle="tooltip" data-placement="top" title="Pago">
								<i class="fal fa-credit-card"></i>
							</a>
						</li>
					<?php endif; ?>
					<li class="nav-item dropdown">
						<a class="nav-link btn-sm grey darken-4" href="<?=base_url('login/logout');?>">
							<strong><i class="fad fa-door-open"></i> Cerrar sesión</strong> 
						</a>
					</li>
				</ul>
			</div>
		<?php endif; ?>
	</nav>
	<!--/.Navbar -->