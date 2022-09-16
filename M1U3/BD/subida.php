<?php

require'conexion.php';
session_start();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

echo $apiKey;

$consulta="INSERT INTO formulario(nombre, apellido, telefono) VALUES ('$nombre','$apellido','$telefono')";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);
mysqli_free_result($resultado);
mysqli_close($conexion);

?>