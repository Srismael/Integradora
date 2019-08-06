<!DOCTYPE html>
<?php
$server = 'localhost';
$port = 3306;
$charset = 'UTF8';
$user = 'root';
$dbase = 'bd_Integradora';
$pass = '';

try{
	$conexion = new PDO('mysql:host='.$server.';dbname='.$dbase.';charset='.$charset.';port='.$port,$user,$pass);
}catch(PDOException $err){
	echo $err->getCode()." ".$err->getMessage();
}

/*$consulta= "SELECT Usuario, Password FROM usuarios WHERE Usuario='".$_POST['login'].
// Creamos dos variables para simular el inicio
// de sesion
$login_valido = "Jesus";
$pwd_valida = "contra";*/

// Verificamos si nuestras variables estan creadas
	if (isset($_POST['login']) && isset($_POST['pwd'])) {

		$consulta= "SELECT Usuario, Passwd FROM usuario WHERE Usuario='".$_POST['login']."' AND Passwd='".$_POST['pwd']."'";
		$resultado = $conexion->query($consulta);
		
		while($registro = $resultado->fetch()){
			$login_valido = $registro['Usuario'];
			$pwd_valida = $registro['Passwd'];
		}

		// Vemos si la informacion enviada es la misma
		// que la de las variables
		if (isset($login_valido)& isset($pwd_valida)) {
			// Si todo esta bien podemos iniciar nuestra sesion

			// La iniciamos
			session_start ();
			// guardamos los datos en nustras variables de sesion
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['pwd'] = $_POST['pwd'];

			// redirigimos hacia la pagina del usuario
			header ('location: index.php');
		}
		else {
			// Si no fueron los datos correctos asignamos un 
			// javascript para alertar que no son los datos correctos
			echo '<body onLoad="alert(\'Usuario desconocido\')">';
			header ('location: error.php');
			// redirigimos a la pagina de inicio
			echo '<meta http-equiv="refresh" content="0;URL=sesion.html">';
		}
	}
	else {
		echo 'las variables del formulario no han sido declaradas.';
	}
?>