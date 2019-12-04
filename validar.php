<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost:3308", "root", "", "usuarios");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
    header("location:index.html");
}
else {
    echo "Datos invalidos";
}
mysqli_free_result($resultado);
mysqli_close($conexion);