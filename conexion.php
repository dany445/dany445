<?php

$contraseña="";
$usuario="root";
$nombredb="crudphp";

try {

	$base_de_datos= new PDO('mysql:host=localhost;dbname='.$nombredb,$usuario,$contraseña);
	/*echo "<script>alert('La Conexion se realizo correctamente')</script>";*/

} catch (Exception $e) {

	echo "<script>alert('Ocurrio un error al conectarse')</script>".$e->getMessage();
}

?>

