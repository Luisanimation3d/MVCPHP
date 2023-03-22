<?php
require 'conexion.php';
$id = $_GET['id'];
$consulta = $db->query("SELECT * FROM proveedor WHERE id = '$id'"); 
$consulta->execute();
$data = $consulta->fetch(PDO::FETCH_ASSOC);
// print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./modificarProveedor.php" method="post">
        <h1>REGISTRAR PROVEEDOR</h1>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="inputContainer">
            <input type="text" name="nombre" id="nombre" placeholder="nombre" value="<?php echo $data['nombre'] ?>">
            <label for="nombre">Nombre</label>
        </div>
        <div class="inputContainer">
            <input type="number" name="telefono" id="telefono" placeholder="telefono" value="<?php echo $data['telefono'] ?>">
            <label for="telefono">Telefono</label>
        </div>
        <div class="inputContainer">
            <input type="text" name="nit" id="nit" placeholder="nit" value="<?php echo $data['nit'] ?>">
            <label for="nit">NIT</label>
        </div>
        <button type="submit">MODIFICAR PROVEEDOR</button>
    </form>
</body>
</html>