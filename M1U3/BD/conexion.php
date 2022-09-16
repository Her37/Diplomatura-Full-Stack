<?php
$host= "localhost";
$usuario = "root";
$clave = "";
$bd = "formulario";


$conexion=mysqli_connect($host, $usuario,$clave,$bd);


if($conexion)
{ echo "Conectado";}
else{
	echo "No se pudo conectar";
}
?>