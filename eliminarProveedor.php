<?php
require 'conexion.php';

$id = intval($_GET['id']);

$eliminar = $db->prepare("DELETE FROM proveedor WHERE id = '$id'");

$eliminar->execute();

header('location: index.php');

exit();