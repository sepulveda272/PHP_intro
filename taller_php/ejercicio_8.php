<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio_8.php" method="post">
        <label>lado del cuadrado</label>
        <input type="number" name="lado">
        <label >Rectangulo</label>
        <label for="">largo</label>
        <input type="number" name="largo">
        <label for="">ancho</label>
        <input type="number" name="ancho">
        <input type="submit" value="calcular figuras">
    </form>
</body>
</html>


<?php
    //cuadrado
    $lado = $_POST["lado"];
    $cuboPerimetro = $lado * 4;
    //rectangulo 
    $ancho = $_POST["ancho"];
    $largo = $_POST["largo"];
    $rectanguloArea = $largo * $ancho;


    echo "el perimetro del cuadrado es de {$cuboPerimetro}<br>
    el area del rectangulo es de {$rectanguloArea}"
?>