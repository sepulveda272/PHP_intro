<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio_7.php" method="post">
        <label>Nombre del articulo</label>
        <input type="text" name="nombreCliente">
        <label for="">precio</label>
        <input type="number" name="precio">
        <label for="">cantida</label>
        <input type="number" name="cantidadPro">
        <input type="submit" value="mirar factura">
    </form>
</body>
</html>

<?php
    $nombre = $_POST["nombreCliente"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidadPro"];
    $total = $precio * $cantidad;
    echo "el cliente compro el articulo es {$nombre}, compro {$cantidad} articulos del ya mencionados<br>"; 
    echo "Cada un cuesta {$precio}<br>";
    echo "El total a pagar es de {$total}"
?>