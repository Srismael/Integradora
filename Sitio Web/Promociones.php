<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Experience descuento</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="estilos.css" />
	</head>
	<body >
	<header>
			<div id="logo">
				<img src ="LOGO.png" >
			</div>
			<nav>
				<ul>					
					<li class="pag_actual"><a href="index.php">Inicio</a></li>
					
					<?php
						if(isset($_SESSION['login'])){
					?>
						<li><a href="cerrar.php">Cerrar Sesi&oacute;n</a></li>
					<?php
						}else{
					?>
						<li><a href="sesion.php">Iniciar Sesi&oacute;n</a></li>
					<?php
						}
					?>
					
					<?php
						if(!isset($_SESSION['login'])){
					?>
						<li> <a href="registro.php">Registrarse</a></li>
					<?php
						}
					?>
			
					
					<li><a href="Promociones.php">Promociones</a></li>
					<li><a href="listadoruta.php">listado de Rutas disponibles</a></li>
				</ul>
			</nav>
			
        </header>
		<section class="fondo-promo">
			<div>
				<p>
					<br>
					En la compra de 3 reservaciones llevate la cuarta gatis
					<br>

					contactar con la agencia para descuento

				</p>
				
			</div>
			
		
		</section>
		<section class="fondo-promo">
			
			<div>
				<p>
					<br>
					En la compra de una reservacion llevate la seguda en un 30% de descuento
					<br>

					contactar con la agencia para descuento
				</p>
			</div>

		</section >
		<footer >

			<div class="informacion-f">
				<p id="acomodof"> Copyright  2019 New experience servicio de turismo, SA de C.V  Todos los derchos reservados  </p>
				
			</div >
				
			<div class="informacion-f">
				<p>
					
					Telefono: 4951121345 <br>
					correo electronico: newexpressagencia@gmail.com <br> 

				</p>

			</div>
			
		</footer>

	</body>
</html>
<?php
	}else{
		header('Location: sesion.php');
	}
?>