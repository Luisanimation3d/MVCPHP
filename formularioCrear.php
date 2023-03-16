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
    <form action="./registrarProveedor.php" method="post">
        <h1>REGISTRAR PROVEEDOR</h1>
        <div class="inputContainer">
            <input type="text" name="nombre" id="nombre" placeholder="nombre">
            <label for="nombre">Nombre</label>
        </div>
        <div class="inputContainer">
            <input type="number" name="telefono" id="telefono" placeholder="telefono">
            <label for="telefono">Telefono</label>
        </div>
        <div class="inputContainer">
            <input type="text" name="nit" id="nit" placeholder="nit">
            <label for="nit">NIT</label>
        </div>
        <button type="submit">Registrar PROVEEDOR</button>
    </form>
</body>
</html>