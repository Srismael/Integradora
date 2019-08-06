<!DOCTYPE html>
<html>
	<head>
		<title>New Experience sesion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="estilos.css" />

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
						<li> <a href="registro.php">Registrarse</a></li>
					<?php
						}
					?>
			
					<li><a href="Promociones.php">Promociones</a></li>
					<li><a href="listadoruta.php">listado de Rutas disponibles</a></li>
				</ul>
			</nav>
			<div>
			
			</div>
        </header>

        <section class="fondo">
			<div class="contenedor1">
			
			<h2 >Iniciar Sesi&oacute;n</h2>
				
			<form action="sesionc.php" method="post">
				<label for="login" class="frase" >Usuario:   </label><br/>
				
				<input type="text" name="login" id="login" class="cuadro_de_texto"><br/><br />
				
				<label for="password" class="frase">Contrase&ntilde;a: </label><br/>
				
				<input type="password" name="pwd" id="password" class="cuadro_de_texto"><br /><br />
				
				<input type="submit" value="Iniciar sesi&oacute;n" class="boton1">
			</form>
			</div>
                
        </section>
        


		<footer >

			<div class="informacion-f">
				<p id="acomodof"> Copyright  2019 New wxperience servicio de turismo, SA de C.V  Todos los derchos reservados  </p>
				
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