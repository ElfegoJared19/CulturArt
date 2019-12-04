<?php
	include 'conexion.php';
	    $usuario = htmlspecialchars($_POST["usuario"]);
        $clave = (int)$_POST["clave"];
        $edad = (int)$_POST["edad"];
        $correo_electronico = htmlspecialchars($_POST["correo_electronico"]);

	$insertar = "INSERT INTO usuarios(usuario,clave,edad,correo_electronico) VALUES
	('$usuario','$clave','$edad','$correo_electronico')";

	$resultado = mysqli_query($conectar, $insertar);
	if (!$resultado){
			echo"OCURRIO UN ERROR";
		}else{
			echo"Usuario almacenado<br><a href='login.html'>Volver</a>";
		}
	
	mysqli_close($conectar);
?>