<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio_9.php" method="post">
        <label>Digitar los datos de la atlte 1</label>
        <label for="">nombre</label>
        <input type="text" name="nameA1">
        <label for="">salto</label>
        <input type="text" name="marca1"><br><br>
        <label>Digitar los datos de la atlte 2</label>
        <label for="">nombre</label>
        <input type="text" name="nameA2">
        <label for="">salto</label>
        <input type="text" name="marca2"><br><br>
        <label>Digitar los datos de la atlte 3</label>
        <label for="">nombre</label>
        <input type="text" name="nameA3">
        <label for="">salto</label>
        <input type="text" name="marca3"><br><br>
        <input type="submit" value="subir datos">
    </form>
</body>
</html>

<?php
    $record = 15.50;
    $maximoSalto = 0;
    $minimoSalto = 999;
    $nombreMayor = "";
    $marca1 = $_POST["marca1"];
    $marca2 = $_POST["marca2"];
    $marca3 = $_POST["marca3"];
    $nombre1 = $_POST["nameA1"];
    $nombre2 = $_POST["nameA2"];
    $nombre3 = $_POST["nameA3"];

    if ( $marca1 > $maximoSalto) {
        $maximoSalto = $marca1;
        $nombreMayor = $nombre1;
    if( $marca2 > $maximoSalto){
        $maximoSalto = $marca2;
        $nombreMayor = $nombre2;
    }
    if( $marca3 > $maximoSalto){
        $maximoSalto = $marca3;
        $nombreMayor = $nombre3;
    }
    if ( $marca1 == $marca2 && $marca1 > $marca3) {
        $nombreMayor = $nombre2." y ".$nombre1;
    }
    if ( $marca1 == $marca3 && $marca1 > $marca2) {
        $nombreMayor = $nombre1." y ".$nombre3;
    }
    if ( $marca2 == $marca3 && $marca2 > $marca1) {
        $nombreMayor = $nombre2." y ".$nombre3;
    } 
    }
    if ($maximoSalto > $record){
        echo "se rompio el record y fue impuesto por la o los atletas {$nombreMayor} llevandose el bono de 500 millones <br>";
    }
    echo "la atleta ganadora del oro fue {$nombreMayor} con un salto de {$maximoSalto} metros";
?>