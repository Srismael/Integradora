<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Experience </title>
		<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="estilos.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		
	</head>
	<body>
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
						<li><a href="registro.php">Registrarse</a></li>
					<?php
						}
					?>
			
					<li><a href="Promociones.php">Promociones</a></li>
					<li><a href="listadoruta.php">listado de Rutas disponibles</a></li>
				</ul>
			</nav>
		</header>
		<section class="fondo3">
            <div id="error" >
                <h1>Usuario no reconocido</h1>
                <p>Ingrese un usuario valido</p>


                <p>Por favor seleccione iniciar sesi&oacute;n para volver a reintentar</p>
            </div>
		
		</section>

		<footer >

			<div class="informacion-f">
				<p id="acomodof"> Copyright  2019 New experience servicio de turismo, SA de C.V  Todos los derchos reservados  </p>
				
			</div >
				
			<div class="informacion-f">
				<p>
					direccion <br>
					telefono <br>
					correo electronico <br> 

				</p>

			</div>
			
		</footer>

	</body>
</html>