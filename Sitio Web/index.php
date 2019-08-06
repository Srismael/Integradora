<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Experience </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />

		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<script src="jquery-1.11.2.min.js"></script>
		<script src="jquery.cycle2.js"></script>
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
		<section>
			<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" data-cycle-speed="0.5">
				<img src= "ruta1/presa.jpg">
				<img src="ruta1/ruta1arte.jpg">
				<img src="ruta1/Ruta1plaza.jpg">
				<img src="ruta1/ruta1restaurante.jpg">
			</div>
		
		</section>
		<section  id="section2">
		
			<div>
				<div class="ruta">
					<h3> Mision</h3>
					<p>
						ofrecer el mejor servicio de calida y confiabilidad, mediante muy buena atencion, 
						diseñando rutas a precios acesibles y asi lograr cubrir las espectativas de nuestro
						clientes.

					</p>
					
				</div  >
				
				<div  class="ruta">
					<h3> vision</h3>
					<p>
						Llegar a ser la mejor tour operadora reconocida en nuetra region por nuestros paquetes
						diseñados,la confianza y seguridad que ofrecemos a nuestros clientes, 
						satisfaciendo totalmente sus necesidades, asi mismo innovando nuestros productos
						y asegurando nuevas experiencias.
					</p>
					
				</div>
				
				<div class="ruta">
					
					<h3> Valores</h3>
					<p>
						Tolereancia: es importante para nosotros, comprender y tener paciencia con los 
						diferentes tipos de clientes ya que son nuestra prioridad. <br><br>

						Amabilidad: Nosotros como empresa queremos que nuestros clientes vallan felices,
						por el buen trato que brindamos hacia ellos. <br><br>

						confiabilidad: La seguridad que debe tener el cliente es muy importante
					</p>
					
				</div>
		</section>
		<footer >

			<div class="informacion-f">
				<p id="acomodof"> Copyright  2019 New wxperience servicio de turismo, SA de C.V  Todos los derchos reservados  </p>
				
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