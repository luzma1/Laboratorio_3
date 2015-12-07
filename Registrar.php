<?php 
	
	//Generación de variables para conexión a Base de Datos
	$server = "localhost";
	$user = "root"; 		
	$password = "root"; 	
	$bd_name = "quiz";
	
	//Conexión de Base de Datos	 
	$connection = new mysqli($server, $user, $password, $bd_name);
 
	// Check connection
	if ($connection->connect_error) {
	    die("Connection failed: " . $connection->connect_error);
	} 	 
	
	//generamos la sentencia sql para insertar los datos
	$sql = "INSERT INTO usuario (nombre, email, password, telefono, especialidad, fotografia)	
	VALUES ('{$_POST['nombreCompleto']}','{$_POST['mail']}','{$_POST['pass']}','{$_POST['numero']}','{$_POST['especialidad']}', null)";

		if ($connection->query($sql) === TRUE) {
		echo "Se ha agregado correctamente el registro a la base de datos.";
	} else {
		echo "Error: " . $sql . "<br>" . $connection->error;
	}
	
	$connection->close();
 ?>
 
<br>
<a href="layout.html">Volver</a>