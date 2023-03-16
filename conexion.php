<?php
$dominio = 'localhost';
$username = 'root';
$password = '';
$bdname = 'coffart';

try {
    $db = new PDO("mysql:host=$dominio;dbname=$bdname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion Exitosa";
} catch (PDOException $e) {
    echo "No se estableció la conexión de la base de datos";
}