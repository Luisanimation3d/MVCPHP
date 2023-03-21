<?php

require  'conexion.php';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$nit = $_POST['nit'];

$registrar = $db->prepare('INSERT INTO proveedor (nombre,telefono,nit) VALUES (?,?,?)');

$registrar->execute([$nombre,$telefono,$nit]);

header('location: formularioCrear.php');

exit();

?>
