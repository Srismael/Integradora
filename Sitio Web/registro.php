<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Experience registro</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		<script src="https://code.jquery.com/jquery-1.11.2.min.js" integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{  
				// function to get all records from table
				function getAll(){

					$.ajax
					({
						url: 'getEst.php',
						data: 'action=showAll',
						cache: false,
						success: function(r)
						{
							$("#getEst").html(r);
						}
					});   
				}

				getAll();
				// function to get all records from table


				// code to get all records from table via select box
				$("#getPais").change(function()
				{    
					var id = $(this).find(":selected").val();

					var dataString = 'action='+ id;

					$.ajax
					({
						url: 'getEst.php',
						data: dataString,
						cache: false,
						success: function(r)
						{
							$("#getEst").html(r);
						} 
					});
				})
				// code to get all records from table via select box
			});
		</script>
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
		<h2>Registro</h2>
			<div class="contenedor">
				
				<form method="POST" action="registrar.php" >
					<p>
						<label class="frase" for="usuario">Usuario</label><br><br>
						<input  class="cuadro_de_texto" type="text" placeholder="Introduzca el usuario" name="usuario" id="usuario" value="" /><br><br>
					</p>
					<p>
						<label class="frase" for="passwd">Contraseña</label><br><br>
						<input class="cuadro_de_texto" type="password" placeholder="Introduzca la contraseña" name="passwd" id="passwd" value="" /><br><br>
					</p>
					<p>
						<label class="frase" for="nombre">Nombre</label><br><br>
						<input class="cuadro_de_texto" type="text" placeholder="Introduzca el nombre" name="nombre" id="nombre" value="" /><br><br>
					</p>
					<p>
						<label class="frase" for="apellido">Apellidos</label><br><br>
						<input class="cuadro_de_texto" type="text" placeholder="Introduzca sus apellidos" name="apellido" id="apellido" value="" /><br><br>
					</p>
					<p>
						<label class="frase" for="direccion">Direcci&oacute;n</label><br><br>
						<input class="cuadro_de_texto" type="text" placeholder="Introduzca su direcci&oacute;n" name="direccion" id="direccion" value="" /><br><br>
					</p>
					<p>
						<label class="frase" for="telfono">Tel&eacute;fono</label><br><br>
						<input class="cuadro_de_texto" type="text" placeholder="Introduzca su tel&eacute;fono" name="telefono" id="telefono" value="" /><br><br>
					</p>
					<p>
						<label class="frase" for="getPais">Pa&iacute;s</label><br><br>
						<select id="getPais" name="pais" class="cuadro_de_texto">
							<option value="showAll" selected="selected">Show All Products</option>
							<?php
								require_once 'config.php';
								
								$stmt = $dbcon->prepare('SELECT * FROM pais');
								$stmt->execute();
								
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{
									extract($row);
									?>
									<option value="<?php echo $IdPais; ?>"><?php echo $Nombre; ?></option>
									<?php
								}
							?>
						</select><br><br>
					</p>
					<p>
						<label class="frase" for="getEst">Estado</label><br><br>
						<select id="getEst" name="estado" class="cuadro_de_texto"></select><br><br>
					</p>
					<p>
						<button class="boton1">Registrar </button>
					</p>
				</form>

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