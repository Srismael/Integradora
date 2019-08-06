<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Experience listadorutas</title>
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
						<li><a href="registro.php">Registrarse</a></li>
					<?php
						}
					?>
			
					<li><a href="Promociones.php">Promociones</a></li>
					<li><a href="listadoruta.php">listado de Rutas disponibles</a></li>
				</ul>
			</nav>
			
        </header>
		<section class="fondo2">
			
			<div class="fon_ruta">
				<p>
					<h3>"Descubriendo Calvillo"</h3>
					El punto de partida será en la plaza de Calvillo, en el horario de 9:30 am para de ahí 
					trasladarnos a la fábrica de dulces de guayaba ‘La Tradicional´´ en donde 
					llegaremos de 9:45 am, el destino se encuentra en 20800, Blvd. Rodolfo Landeros 
					Gallegos 407, José Landeros, Calvillo, Ags. Antes del traslado a la fábrica les 
					daremos un box lunch. 9:50am se les dará un recorrido por la fábrica explicando el 
					procedimiento y detalles de la elaboración del dulce de guayaba.<br><br>
					<img class="imgruta" src= "ruta1/presa.jpg">
					<br>
					<br>
					<a class="forma_ruta" href="rutas.php"; >Ver mas..</a>
				</p>
					
					
			</div>
			
			
			<div class="fon_ruta">
				<p>
					<h3>"La riqueza de mi pueblo"</h3>
					El punto de salida es en la Plaza Principal de Calvillo para trasladarse a la 
					comunidad de Milpillas de Abajo en punto de las 7am. Esta ruta considera 
					promover el agroturismo de nuestras comunidades, por ello, comenzamos con 
					el proceso del queso desde que la leche se saca de la Vaca; a las 8 de la mañana
					los turistas deben estar en el corral donde están situadas las vacas 
					para empezar con la actividad, una de las guías les va a explicar el proceso, el 
					turista tendrá que participar en la actividad de la ordeña y tendrá que ejecutarlo 
					desde amarrarle los pies.<br><br>
					<img class="imgruta" src= "ruta2/foto3.jpg">
					<br>
					<br>
					<a class="forma_ruta" href="ruta2.php"; >Ver mas..</a>
				</p>
			</div>
				
			
			<div class="fon_ruta">
				<p>
					<h3>"Descubriendo Calvillo"</h3>
					El recorrido inicia en la salida Zacatecas saliendo a las 6:00 am de ahí, durante el 
					transcurso del viaje se ofrecerá un box lunch y la hora de llegada será a las 
					8:00 am en donde se hará un recorrido por la catedral y lugares cercanos de 
					este los cuales serán: Plaza de Armas, Museo de Pedro Coronel, este recorrido 
					termina a las 10:30 am, y se les dará tiempo para almorzar en el lugar que 
					quieran porque no incluye lonche, a las 11:30 Am se llegará al hotel Arroyo de 
					Plata ubicado en Blvd.<br><br>
					<img class="imgruta" src= "ruta3/foto5.jpg">
					<br>
					<br>
					<a class="forma_ruta" href="ruta3.php"; >Ver mas..</a>
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
<?php
	}else{
		header('Location: sesion.php');
	}
?>