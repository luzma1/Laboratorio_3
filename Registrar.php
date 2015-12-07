<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
	 
 <?php 
	
	//Generación de variables para conexión a Base de Datos
	$server = "localhost";
	$user = "root"; 		
	$password = "root"; 	
	$bd_name = "quiz";
	
	//Conexión de Base de Datos	 
	$connection = new mysqli($server, $user, $password, $bd_name);
 
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 	 
	
	//generamos la sentencia sql para insertar los datos
	$sql = "INSERT INTO usuario (nombre, email, password, telefono, especialidad, fotografia)	
	VALUES ('{$_POST['nombreCompleto']}','{$_POST['mail']}', '{$_POST['pass']}', '{$_POST['numero']}', '{$_POST['especialidad']}', null)";

		if ($conexion->query($sql) === TRUE) {
		echo "Se ha agregado correctamente el registro a la base de datos.";
	} else {
		echo "Error: " . $sql . "<br>" . $conexion->error;
	}
	
	$conexion->close();
 ?>
 
 hueheu
 </body>
</html>