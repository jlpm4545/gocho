<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="prueba2";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario De Contacto</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<div class="form">
			<form action="guardar.php" method="POST">
				<p>Nombre</p>
				<label for="nombre">Su nombre</label>
				<br>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<p>Correo</p>
				<label for="correo">Direccion De Correo</label>
				<br>
				<input type="email" name="correo" placeholder="alguien@algo.com" required>
				<p>Mensaje</p>
				<label for="mensaje">Su Mensaje</label>
				<br>
				<textarea name="mensaje" placeholder="Mensaje" required></textarea>
				<br>
				<br>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</body>
</html>