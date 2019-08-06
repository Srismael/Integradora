<!DOCTYPE html>
<?php
	$servidor ='localhost';
	$login='root';
	$password='';
	$database='bd_Integradora';
	$charset='UTF8';
	$port=3306;
	
	try{
		$conexion=new PDO('mysql:host='.$servidor.';dbname='.$database.';charset='.$charset.';port='.$port, $login, $password);
	}

	catch(PDOException $error){
		echo $error->getCode().''.$error->getMessage();
	}
	
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellido'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['passwd'];
	$pais = $_POST['pais'];
	$estado = $_POST['estado'];
	
	$consulta = "INSERT INTO usuario(Usuario, Passwd, Nombre, Apellido, Direccion, Telefono, IdPais, IdEstado) VALUES ('$usuario', '$contrasena', '$nombre', '$apellidos', '$direccion', '$telefono', $pais, $estado)";
	
	$conexion->exec($consulta);
	
	header('Location: index.php');
	
	
?>