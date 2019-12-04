<?php
 $bd_host = "localhost:3308";
 $bd_user = "root";
 $bd_pass = "";
 $bd_name = "usuarios";
 $conectar = mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name,3308);

 if(!$conectar){
	echo 'error al conectarse';
}
else{
	echo 'conectado';
}
?>