<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Ventas</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/fontawesome-all.min.css"> 	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/2.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/estilo.css">	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">POS</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>index.php/usuarios/menuadm">Usuario</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/producto/index">Productos</a></li>
					<!--<li><a target="_blank" href="<?php echo base_url(); ?>index.php/producto/index">Productos</a></li> -->
					<li><a href="<?php echo base_url(); ?>index.php/user/index">Usuarios</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/cliente/index">Clientes</a></li>
					<li><a href="./ventas.php">Reportes</a></li>																					
				</ul>
				<?php echo form_open_multipart('usuarios/logout'); ?>
                        <button type="submit" name="button2" class="btn btn-light" style="float: right;">CERRAR SESION</button>
                        <?php echo form_close(); ?>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">