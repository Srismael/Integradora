<!DOCTYPE html>
<?php
	session_start();
?>
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
						<li> <a href="registro.php">Registrarse</a></li>
					<?php
						}
					?>
			
					<li><a href="Promociones".php">Promociones</a></li>
					<li><a href="listadoruta.php">listado de Rutas disponibles</a></li>
				</ul>
			</nav>
			
        </header>
		<section class="fondo3">
			<h2>Ruta Local</h2>
			<h2>"Descubriendo Calvillo"</h2>
			<p class="informacion">
				El punto de partida será en la plaza de Calvillo, en el horario de 9:30 am para de ahí
				trasladarnos a la fábrica de dulces de guayaba ‘La Tradicional´´ en donde 
				llegaremos de 9:45 am, el destino se encuentra en 20800, Blvd. Rodolfo Landeros 
				Gallegos 407, José Landeros, Calvillo, Ags. Antes del traslado a la fábrica les 
				daremos un box lunch. 9:50am se les dará un recorrido por la fábrica explicando el 
				procedimiento y detalles de la elaboración del dulce de guayaba. Al terminar (11:30 am) 
				nos dirigiremos a la presa de Malpaso donde llegaremos a un horario 
				aproximado de 12:00 pm luego daremos un recorrido a la presa en lancha. Ahí se  
				encuentra una vista panorámica, donde el turista podrá apreciar y realizar safari 
				fotográfico a su flora y fauna existentes. Al terminar el recorrido en lancha en horario 
				de 13:10 tendrán un tiempo determinado (1 hora 10 minutos) para que coman en el 
				restaurante ‘’Camino Viejo´´.<br><br>
				
				La salida de Malpaso será a las 14:30 pm luego llegaremos de (15:00 pm) al centro 
				histórico la plaza de Calvillo, enseguida iremos a la Presidencia Municipal, y al 
				Parían, por último, darán un recorrido para que el turista aprecie cada detalle e 
				historia de la iglesia, ya que parte de su construcción esta detallada con oro y tiene 
				la segunda copula más grande de Latinoamérica en su tipo terminaremos a las 
				16:30 pm. Daremos tiempo libre para realizar compras y realizar visitas a las tiendas 
				de artesanías, dulces típicos, panaderías y helados que se realizan en Calvillo y a  
				las 18:00 pm termina el recorrido. <br>

			
			</p>
			
			<h2>intinerario</h2>
			
			<table >
				<tbody>
					<tr>
						<td>Hora</td>
						<td>Descripcion de actividad </td>
					</tr>
					<tr>
						<td>9:00 AM</td>
						<td>Punto de salida de la Plaza Principal de Calvillo</td>
					</tr>
					<tr>
						<td>9:10 AM </td>
						<td>Entregas de Box lunch (se recomienda tomarlo antes de la </td>
					</tr>
					<tr>
						<td>9:30 AM</td>
						<td>Traslado a la Fábrica de Dulces Guayeco</td>
					</tr>
					<tr>
						<td>9:45 AM</td>
						<td>Visita a la fábrica (duración desde 9:45 a 11:20)</td>
					</tr>
					<tr>
						<td>11:30 AM</td>
						<td>Traslado a la Presa de Malpaso</td>
					</tr><tr>
						<td>12:00 PM</td>
						<td>Llegada a la Presa para realizar recorrido en lancha</td>
					</tr>
					<tr>
						<td>13:10 PM</td>
						<td>Comida en Restaurante Camino Viejo de la presa (a 14:20pm)</td>
					</tr><tr>
						<td>2:30 PM</td>
						<td>Salida al centro histórico de Calvillo</td>
					</tr>
					<tr>
						<td>3:00 PM</td>
						<td>Recorrido por la Plaza Principal, Presidencia Municipal, El parían y finalmente el Templo del Sr. Del Salitre (3pm a 4:20)</td>
					</tr>
					<tr>
						<td>4:30p PM</td>
						<td>Tiempo libre para realizar compras (se sugiere visitar las tiendas de artesanías, dulces típicos, panaderías, y helados). </td>
					</tr>
					<tr>
						<td>6:00 PM</td>
						<td>Se concluye el recorrido</td>
					</tr>
					
				</tbody>
			</table>
		</section>
		<section>
			<div id="div-bien-cool">
					<iframe id="aomodo" src="https://www.google.com/maps/embed?pb=!1m46!1m8!1m3!1d3703.2915596783423!2d-102.718752!3d21.8462868!3m2!1i1024!2i768!4f13.1!4m35!3e0!4m3!3m2!1d21.8464539!2d-102.71827979999999!4m5!1s0x8429cefbfac5b06b%3A0xcd4c2daf237228a3!2sFabrica+de+Dulces+Flor+de+Calvillo%2C+Boulevard+Rodolfo+Landeros+Gallegos%2C+La+Alberca%2C+Ojocaliente%2C+Aguascalientes!3m2!1d21.88204!2d-102.6746752!4m5!1s0x8429cf3b0710106b%3A0x5191b367a5e2dbac!2sPresa+de+Malpaso%2C+Aguascalientes!3m2!1d21.8577099!2d-102.65331839999999!4m5!1s0x8429cf36c48a3fdb%3A0xf78bf9ee22b9cb05!2sRestaurant+Camino+Viejo+SA+de+CV%2C+Presa+de+Malpaso%2C+Calvillo%2C+Aguascalientes!3m2!1d21.851138!2d-102.64932499999999!4m5!1s0x8429cc0292d3f999%3A0x70250e9c5c717d53!2sCentro%2C+Calvillo%2C+Aguascalientes!3m2!1d21.8460462!2d-102.71710309999999!4m5!1s0x8429cc03a222386b%3A0xed022b53a4d90a13!2sTemplo+de+San+Jos%C3%A9%2C+Centenario%2C+Zona+Centro%2C+Calvillo%2C+Aguascalientes!3m2!1d21.8463355!2d-102.71772349999999!5e0!3m2!1ses-419!2smx!4v1564526259867!5m2!1ses-419!2smx" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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