<?php


require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$nit = $_POST['nit'];

$update = $db->prepare("UPDATE proveedor SET nombre = '$nombre', telefono = '$telefono', nit = '$nit' WHERE id = '$id'");

$update->execute();
header('location: index.php');

exit();


