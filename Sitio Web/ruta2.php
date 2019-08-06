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
			
					<li><a href="Promociones.php">Promociones</a></li>
					<li><a href="listadoruta.php">listado de Rutas disponibles</a></li>
				</ul>
			</nav>
			
        </header>
		<section class="fondo3">
			<h2>Ruta Regional </h2>
			<h2>"La riqueza de mi pueblo"</h2>
			<p class="informacion">
				El punto de salida es en la Plaza Principal de Calvillo para trasladarse a la
				comunidad de Milpillas de Abajo en punto de las 7am. Esta ruta considera 
				promover el agroturismo de nuestras comunidades, por ello, comenzamos con 
				el proceso del queso desde que la leche se saca de la Vaca; a las 8 de la mañana
				los turistas deben estar en el corral donde están situadas las vacas 
				para empezar con la actividad, una de las guías les va a explicar el proceso, el 
				turista tendrá que participar en la actividad de la ordeña y tendrá que ejecutarlo 
				desde amarrarle los pies. Después a las 9:30 se llevará la leche donde se 
				elabora, en primer lugar, la dueña de las vacas les dará información del proceso
				del queso, ya que la duración para que la leche esté lista para hacer el queso 
				tarda de una hora a hora y media, ese tiempo de espera manejaremos el box 
				lunch y que convivan con algunos de los animales que se tienen en el lugar 
				para después seguir con el procedimiento del queso.<br><br>
				
				Al comienzo de las 10:30 de la mañana se dará inicio al seguimiento del queso 
				donde el turista participará, y el termino será a las 11:10 am. De concluir con la 
				elaboración del queso daremos un paseo a caballo en horario de 11:30 
				llevándolos al centro del pueblo y proporcionaremos una parada en la iglesia 
				para que la conozcan y observen su estructura el recorrido durara 30 minutos 
				ya que tendremos que llegar 12 pm al destino Corral Colorado. El turista vivirá 
				la experiencia de estar en contacto con la naturaleza, escuchando los cantos 
				de los pájaros y observando la flora y la fauna. Además, los llevaremos a un 
				lugar para que se tomen fotos y tendrán un tour por una piedra conocida como 
				el nombre la boca del león. Alas 12:45 pm señoras de la comunidad venderán 
				comida en el mismo lugar para los que consuman ya que va hacer un servicio
				especialmente para el turista.<br><br>
				
				Salimos a las 14.30 pm del corral colorado, tendrán oportunidad de hacer compras 
				en las tiendas porque al destino que vamos no existen y después 15:10 pm nos
				dirigimos a la hacienda de Santa Rosa llegamos a las 16:00 pm y les daremos 
				media para que se acomoden en la hacienda y descansen. Después a las 16:30 
				pm vamos a salir a dar un recorrido por el terreno de la hacienda para que 
				observen la flora y fauna que existe, arroyos y bordos, pueden realizar safari 
				fotográfico, observación de ecosistemas y si quieren nadar va a estar permitido. 
				A las 20:00 pm regresamos a la hacienda para servir la cena, termina a las
				21:00 pm. habrá actividades de noche para las personas que estén 
				interesadas, como hacer fogata y cantar.<br><br>
				
				Al siguiente día en horario de 8am servicio de desayuno a las 10 de la mañana 
				salimos de la hacienda y nos dirigimos a Tapias Viejas al Cerro de Huijolote. 
				Tenemos que estar en el lugar de 12pm y se ejecutara escalada, después 
				vamos a caminar por la corona y por encima del cerro para que observen los 
				paisajes de su entorno, a las 15:30 de la tarde bajamos del cerro. Se les dará 
				oportunidad de llegar a una tienda de Tapias para que compren lo que deseen, 
				después los llevaremos de regreso a la plaza de Calvillo en donde termina 
				nuestro recorrido llegaremos aproximadamente entre 17:35 de la tarde.<br><br>

			
			</p>
			
			<h2>intinerario</h2>
			
			<table  >
				<tbody>
					<tr>
						<td>Hora</td>
						<td>Descripcion de actividad </td>
					</tr>
					<tr>
						<td>6:45 AM</td>
						<td>Punto de salida de la Plaza Principal de Calvillo</td>
					</tr>
					<tr>
						<td>7:00 AM</td>
						<td>Traslado a la comunidad de Milpillas de abajo perteneciente a Jesús María</td>
					</tr>
					<tr>
						<td>8:00 AM</td>
						<td>Ordeñar la vaca (duración de 8:00am a 9:30am)</td>
					</tr>
					<tr>
						<td>9:30 AM</td>
						<td>Una pequeña platica, box lunch y libertadpara estar con los animales (9:30am a 10:30am)	</td>
					</tr>
					<tr>
						<td>10:30 PM</td>
						<td>Elaboración de queso (10:30am a 11:10am)</td>
					</tr><tr>
						<td>11:30 PM</td>
						<td>Recorrido al pueblo, iglesia (duración 30 mint. 11:30am a 12pm)</td>
					</tr>
					<tr>
						<td>12:00 PM </td>
						<td>Llegada al Corral Colorado donde podrán relajarse y realizar safari fotográfico (12pm a 12:40pm)</td>
					</tr><tr>
						<td>12:45 PM</td>
						<td>Señoras de la comunidad venderán comida especialmente para el turista (12:45pm a 2:15pm)</td>
					</tr>
					<tr>
						<td>2:30 PM</td>
						<td>Salida del Corral Colorado y en el trascurso del tiempo se les dará la libertad de comprar en las tiendas de la comunidad (2:30pm a 3:00pm)</td>
					</tr>
					<tr>
						<td>3:10 PM</td>
						<td>Traslado a la hacienda de Santa Rosa (3:10pm a 4:00pm)</td>
					</tr>
					<tr>
						<td>4:00 PM</td>
						<td>Acomodar sus cosas en su habitación que corresponda y descansar (4:00pm a 4:30pm)</td>
					</tr>
					<tr>
						<td>4:30 PM</td>
						<td>Se dará un recorrido por la hacienda, tendrán acceso a los pozos de agua si lo requieren (4:30pm a 8pm)</td>
					</tr>
					<tr>
						<td>8:00 PM</td>
						<td>Servir cena (8:00pm a 9:00pm)</td>
					</tr>
					<tr>
						<td>9:00 PM</td>
						<td>Fogata y canto (9:00 a 11pm)</td>
					</tr>
					<tr>
						<td>8:00 AM</td>
						<td>Servicio de desayuno (8:30am a 9:30am) </td>
					</tr>
					<tr>
						<td>9:30 AM</td>
						<td>Tiempo para alistarse</td>
					</tr>
					<tr>
						<td>10:00 AM </td>
						<td>Salida a la comunidad de Tapias Viejas al Cerro de Huijolotes (10am a 12pm)</td>
					</tr><tr>
						<td>12:00 PM </td>
						<td>Llegada al Cerro del Huijolotes, habrá escalada en la corona (12pm a 3:30)</td>
					</tr>
					<tr>
						<td>3:30 PM </td>
						<td>Traslado a Calvillo (Plaza Principal) habrá paradas en tiendas (3:30 a 5:30)</td>
					</tr>
					<tr>
						<td>5:30 PM </td>
						<td>Legada a la Plaza Principal y termino de la ruta.</td>
					</tr>
					
				</tbody>
			</table>
		</section>
		<section>
				<iframe src="https://www.google.com/maps/embed?pb=!1m32!1m8!1m3!1d3703.2902174043375!2d-102.7201882!3d21.8463386!3m2!1i1024!2i768!4f13.1!4m21!3e0!4m3!3m2!1d21.8464253!2d-102.71829269999999!4m5!1s0x8429c4c9b19ced05%3A0x6eb62fda25baf8ed!2sMilpillas+de+Arriba%2C+Aguascalientes!3m2!1d21.93593!2d-102.554739!4m5!1s0x8429df29a7160c65%3A0x22a5657bbee4483f!2sPotrero+de+los+L%C3%B3pez%2C+Aguascalientes!3m2!1d22.0896319!2d-102.5219156!4m3!3m2!1d21.8462085!2d-102.71838269999999!5e0!3m2!1ses-419!2smx!4v1564526166898!5m2!1ses-419!2smx" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			
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