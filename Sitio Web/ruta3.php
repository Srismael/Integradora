
<?php
	session_start();
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
			<h2>Ruta Nacional</h2>
			<h2>Circuito Nacional "La Ruta Norte"</h2>
			<p class="informacion">
			El recorrido inicia en la salida Zacatecas saliendo a las 6:00 am de ahí, durante el 
			transcurso del viaje se ofrecerá un box lunch y la hora de llegada será a las 
			8:00 am en donde se hará un recorrido por la catedral y lugares cercanos de 
			este los cuales serán: Plaza de Armas, Museo de Pedro Coronel, este recorrido 
			termina a las 10:30 am, y se les dará tiempo para almorzar en el lugar que 
			quieran porque no incluye lonche, a las 11:30 Am se llegará al hotel Arroyo de 
			Plata ubicado en Blvd. Adolfo López Mateos s/n, Zacatecas Centro, 98000 
			Zacatecas, Zac.  Haciendo chek in tomando un descanso y continuando con el 
			recorrido a las12:15 pm hacia la iglesia de Santo Domingo, terminamos con el 
			recorrido a las 13:30 pm.<br><br>
			
			Después del primer recorrido se hace 15 min para ir al cerro de la Bufa en donde se
			practicarán varias actividades, al llegar al cerro a las 14:15 Pm Llegada al 
			cerro de la Bufa y recorrido por la parroquia de nuestra señora del patrocinio y 
			museo de la toma de zacatecas. <br><br>
			
			</p>
			<h2>intinerario</h2>
			
			<table >
				<tbody>
					<tr>
						<td>Hora</td>
						<td>Descripcion de actividad </td>
					</tr>
					<tr>
						<td>6:00 AM</td>
						<td>Salida a Zacatecas desde Aguascalientes (Box lunch en el transcurso de camino)</td>
					</tr>
					<tr>
						<td>8:00 AM</td>
						<td>Recorrido por la Catedral, Plaza de Armas y Museo de Pedro Coronel</td>
					</tr>
					<tr>
						<td>10:30 AM</td>
						<td>Tiempo para almorzar en el lugar que el turista quiera.</td>
					</tr>
					<tr>
						<td>11:30 AM</td>
						<td>Llegada al hotel ‘’Arroyo de Plata’’</td>
					</tr>
					<tr>
						<td>1:30 PM</td>
						<td>Recorrido a la Iglesia de Santo Domingo y Convento de Guadalupe</td>
					</tr><tr>
						<td>3:45 PM</td>
						<td>Emprender camino al cerro de la Bufa</td>
					</tr>
					<tr>
						<td>4:00 PM</td>
						<td>Llegada al cerro de la Bufa y atender al Teleférico</td>
					</tr><tr>
						<td>5:30 PM</td>
						<td>Comida en el Restaurante ‘’Luky Lucian’’</td>
					</tr>
					<tr>
						<td>6:30 PM</td>
						<td>Regreso al Hotel</td>
					</tr>
					<tr>
						<td>10:00 PM</td>
						<td>Visita al antro ‘’La Mina Club’’</td>
					</tr>
					<tr>
						<td>2:00 AM</td>
						<td>Regreso al hotel</td>
					</tr>
					<tr>
						<td>8:30 AM</td>
						<td>Emprender viaje a Durango</td>
					</tr>
					<tr>
						<td>11:00 AM</td>
						<td>Llegada al restaurante ‘’Esquilon’’</td>
					</tr>
					<tr>
						<td>12:30 AM</td>
						<td>Llegada al ‘’Hotel Gobernador’’</td>
					</tr>
					<tr>
						<td>1:30 PM</td>
						<td>Salida al parque temático ‘’Paseo del viejo Oeste’’</td>
					</tr><tr>
						<td>2:00 PM</td>
						<td>Llegada al parque y transcurso del día para comer e interactuar </td>
					</tr>
					<tr>
						<td>8:30 PM</td>
						<td>Regreso al hotel y descanso</td>
					</tr><tr>
						<td>8:00 AM</td>
						<td>Salida hacia Mazatlán</td>
					</tr>
					<tr>
						<td>11:30 AM </td>
						<td>Inicia recorrido al Malecón</td>
					</tr>
					<tr>
						<td>1:00 PM</td>
						<td>Chek in en el hotel ‘’Costa de Oro’’</td>
					</tr>
					<tr>
						<td>1:30 PM</td>
						<td>Consideración del turista descansar o comer en el hotel </td>
					</tr>
					<tr>
						<td>8:00pm</td>
						<td>Recorrido en Olas Altas, El Faro y Los Monos Beaches</td>
					</tr>
					<tr>
						<td>9:00 PM</td>
						<td>Cena en el restaurante ‘’El Capitáno’’</td>
					</tr>
					<tr>
						<td>10:30 PM</td>
						<td>Regreso al hotel</td>
					</tr><tr>
						<td>10:00 AM</td>
						<td>Emprender viaje hacia Aguascalientes </td>
					</tr>
					<tr>
						<td>2:00 PM</td>
						<td>Box lunch</td>
					</tr><tr>
						<td>7:00 PM</td>
						<td>Llegada a Aguascalientes </td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id="section-rut3">
			<div class="acomodo-google">
					<iframe  src="https://www.google.com/maps/embed?pb=!1m76!1m12!1m3!1d472375.5590532475!2d-102.71035192844191!3d22.33723375465034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m61!3e0!4m5!1s0x8429ec143ae4d9fb%3A0x4016978679c5220!2sAguascalientes!3m2!1d21.8852562!2d-102.2915677!4m5!1s0x86824e608af52ce7%3A0x14cda871292fe7c9!2sZacatecas!3m2!1d22.764198399999998!2d-102.5865558!4m5!1s0x86824e8647bc39df%3A0xe075b9e869e2cd40!2sPlaza+De+Armas+En+Zacatecas!3m2!1d22.7760653!2d-102.5718466!4m5!1s0x86824e863a74026f%3A0xdec0cc5dc9a4491e!2sCatedral+Bas%C3%ADlica+de+Zacatecas!3m2!1d22.7757185!2d-102.5723998!4m5!1s0x86824e87b7a8c5e5%3A0xfdb28c270975be5d!2sMuseo+Pedro+Coronel!3m2!1d22.776116!2d-102.57364059999999!4m5!1s0x86824e8952ce3043%3A0xef2997ee4c03cc48!2sHotel+Arroyo+de+la+Plata!3m2!1d22.7695276!2d-102.5700505!4m5!1s0x86824e86525a3f25%3A0xec73a34deead3caf!2sParroquia+de+Santo+Domingo!3m2!1d22.7763664!2d-102.5732627!4m5!1s0x86824e9aebe3d865%3A0x95e398a5f77254ad!2sCerro+de+la+Bufa%2C+Zacatecas!3m2!1d22.777222!2d-102.5625!4m5!1s0x86824e84e089fac3%3A0x6080df9e1a894989!2sMuseo+Toma+de+Zacatecas!3m2!1d22.778395!2d-102.565703!4m5!1s0x86824e7cf4315f5b%3A0x91d28692e90b7c50!2sLa+Mina+Club%2C+Antonio+Dovali+Jaime%2C+Zacatecas+Centro%2C+Zacatecas!3m2!1d22.776791!2d-102.5796309!5e0!3m2!1ses-419!2smx!4v1564522300967!5m2!1ses-419!2smx" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="acomodo-google">
					<iframe  src="https://www.google.com/maps/embed?pb=!1m42!1m8!1m3!1d467528.458405683!2d-104.7915594!3d23.7271848!3m2!1i1024!2i768!4f13.1!4m31!3e0!4m5!1s0x8429ec143ae4d9fb%3A0x4016978679c5220!2sAguascalientes!3m2!1d21.8852562!2d-102.2915677!4m5!1s0x86824e608af52ce7%3A0x14cda871292fe7c9!2sZacatecas!3m2!1d22.764198399999998!2d-102.5865558!4m5!1s0x869bb7a518bcdf73%3A0xbfdd8ea63a6c4ad4!2sDurango!3m2!1d24.027720199999997!2d-104.6531759!4m5!1s0x869bc8203590180f%3A0x6be8c6f10f922d69!2sHotel+Gobernador%2C+Avenida+20+de+Noviembre%2C+Zona+Centro%2C+Victoria+de+Durango%2C+Durango!3m2!1d24.0268327!2d-104.66187339999999!4m5!1s0x869bc96d7a9c5fcf%3A0xe24c5e8385aa91f9!2sPaseo+del+Viejo+Oeste%2C+Victoria+de+Durango%2C+Durango!3m2!1d24.1095377!2d-104.6989845!5e0!3m2!1ses-419!2smx!4v1564522068789!5m2!1ses-419!2smx" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="acomodo-google">
					<iframe  src="https://www.google.com/maps/embed?pb=!1m64!1m12!1m3!1d3779465.239899124!2d-106.58467376216377!3d22.320225522616774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m49!3e0!4m5!1s0x8429ec143ae4d9fb%3A0x4016978679c5220!2sAguascalientes!3m2!1d21.8852562!2d-102.2915677!4m5!1s0x86824e608af52ce7%3A0x14cda871292fe7c9!2sZacatecas!3m2!1d22.764198399999998!2d-102.5865558!4m5!1s0x869bb7a518bcdf73%3A0xbfdd8ea63a6c4ad4!2sDurango!3m2!1d24.027720199999997!2d-104.6531759!4m5!1s0x869f5341681837c1%3A0x62a4c4aaf13c72b2!2sMazatl%C3%A1n%2C+Sinaloa!3m2!1d23.2494148!2d-106.4111425!4m5!1s0x869f5392d24cecc3%3A0x15968f1b6af9ea34!2zTWFsZWPDs24gZGUgTWF6YXRsw6FuLCBNYXphdGzDoW4sIFNpbmFsb2E!3m2!1d23.196001799999998!2d-106.42642409999999!4m5!1s0x869f54bb4450355f%3A0x3efd61eae4639a9!2sCosta+de+Oro+Beach+Hotel%2C+Avenida+Camar%C3%B3n+S%C3%A1balo%2C+Zona+Dorada%2C+Mazatl%C3%A1n%2C+Sinaloa!3m2!1d23.2496421!2d-106.4551039!4m5!1s0x8698abf565e7cb61%3A0x42958893b4023bc3!2sEl+Capitano%2C+Avenida+S%C3%A1balo+Cerritos%2C+Royal+Country%2C+Mazatl%C3%A1n%2C+Sinaloa!3m2!1d23.2907829!2d-106.4734428!4m5!1s0x8429ec143ae4d9fb%3A0x4016978679c5220!2sAguascalientes!3m2!1d21.8852562!2d-102.2915677!5e0!3m2!1ses-419!2smx!4v1564522211142!5m2!1ses-419!2smx" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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