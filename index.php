<?php
require 'conexion.php';
$consulta = $db->query('SELECT * FROM proveedor');
$data = $consulta->fetchAll();
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
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Nit</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
    
                foreach ($data as $proveedor) {
                ?>
    
                    <tr>
                        <td><?php echo $proveedor['nombre'];?></td>
                        <td><?php echo $proveedor['telefono'];?></td>
                        <td><?php echo $proveedor['nit'];?></td>
                        <td><a href="./editarProveedor.php?id=<?php echo $proveedor['id']; ?>">Editar</a>
                        <a class="eliminar" href="">Eliminar</a>
                        </td>
                    </tr>
    
                <?php
                }
    
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>