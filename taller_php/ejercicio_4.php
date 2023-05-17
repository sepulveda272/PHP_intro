<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio_4.php" method="post">
        <label>Digitar Nombre y edad estudiante 1</label>
        <input type="text" name="nombre1">
        <input type="number" name="edad1"><br><br>
        <label>Digitar Nombre y edad estudiante 2</label>
        <input type="text" name="nombre2">
        <input type="number" name="edad2"><br><br>
        <label>Digitar Nombre y edad estudiante 3</label>
        <input type="text" name="nombre3">
        <input type="number" name="edad3"><br><br>
        <input type="submit" value="subir datos">
    </form>
</body>
</html>
<?php
    $mayor = 0;
    $nombreMayor = "";
        
        if ($_POST["edad1"] > $mayor) {
            $mayor = $_POST["edad1"];
            $nombreMayor = $_POST["nombre1"];
        }
        if ($_POST["edad2"] > $mayor) {
            $mayor = $_POST["edad2"];
            $nombreMayor = $_POST["nombre2"];
        }
        if ($_POST["edad3"] > $mayor) {
            $mayor = $_POST["edad3"];
            $nombreMayor = $_POST["nombre3"];
        }
    echo "el estudiante de mas edad es {$nombreMayor} con un edad de {$mayor} años" 

    ?>