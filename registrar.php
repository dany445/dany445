<?php

include_once("conexion.php");

$nombre = $_POST["nombre"];
$raza = $_POST["raza"];
$ocupacion = $_POST["ocupacion"];
$primeraaparicion = $_POST["primeraaparicion"];
$bio = $_POST["bio"];


$sentencia = $base_de_datos->prepare("INSERT INTO personas (nombre, raza, ocupacion, primeraaparicion, bio) VALUES (:nombre, :raza, :ocupacion, :primeraaparicion, :bio)");

$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':raza', $raza);
$sentencia->bindParam(':ocupacion', $ocupacion);
$sentencia->bindParam(':primeraaparicion', $primeraaparicion);
$sentencia->bindParam(':bio', $bio);

if ($sentencia->execute()) {
	return header ("Location:index.php");
}
else{
	return "error";
}

?>

