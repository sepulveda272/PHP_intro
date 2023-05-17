<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio_6.php" method="post">
        <label>Digitar Nombre,sexo y nota del estudiante 1</label>
        <input type="text" name="nombre1">
        <input type="text" name="genero1">
        <input type="number" name="nota1"><br><br>
        <label>Digitar Nombre,sexo y nota del estudiante 2</label>
        <input type="text" name="nombre2">
        <input type="text" name="genero2">
        <input type="number" name="nota2"><br><br>
        <label>Digitar Nombre,sexo y nota del estudiante 3</label>
        <input type="text" name="nombre3">
        <input type="text" name="genero3">
        <input type="number" name="nota3"><br><br>
        <input type="submit" value="subir datos">
    </form>
</body>
</html>


<?php
    $notaMayor = 0;
    $notaMenor = 999;
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $nombre3 = $_POST["nombre3"];
    $nombreMayor = "";
    $nombreMenor = "";
    $hombre = 0;
    $mujeres = 0;
    


    if ( $nota1 > $notaMayor) {
        $notaMayor = $nota1;
        $nombreMayor = $nombre1;
    if( $nota2 > $notaMayor){
        $notaMayor = $nota2;
        $nombreMayor = $nombre2;
    }
    if( $nota3 > $notaMayor){
        $notaMayor = $nota3;
        $nombreMayor = $nombre3;
    }
    if ( $nota1 == $nota2 && $nota1 > $nota3) {
        $nombreMayor = $nombre2." y ".$nombre1;
    }
    if ( $nota1 == $nota3 && $nota1 > $nota2) {
        $nombreMayor = $nombre1." y ".$nombre3;
    }
    if ( $nota2 == $nota3 && $nota2 > $nota1) {
        $nombreMayor = $nombre2." y ".$nombre3;
    } 
    }
    if ( $nota1 < $notaMenor) {
        $notaMenor = $nota1;
        $nombreMenor = $nombre1;
    if( $nota2 < $notaMenor){
        $notaMenor = $nota2;
        $nombreMenor = $nombre2;
    }
    if( $nota3 < $notaMenor){
        $notaMenor = $nota3;
        $nombreMenor = $nombre3;
    }
    if ( $nota1 == $nota2 && $nota1 < $nota3) {
        $nombreMenor = $nombre2." y ".$nombre1;
    }
    if ( $nota1 == $nota3 && $nota1 < $nota2) {
        $nombreMenor = $nombre1." y ".$nombre3;
    }
    if ( $nota2 == $nota3 && $nota2 < $nota1) {
        $nombreMenor = $nombre2." y ".$nombre3;
    } 
    }
    if ($_POST["genero1"] == "hombre" || $_POST["genero1"] == "masculino") {
        $hombre++;
    }
    else {
        $mujeres++;
    }
    if ($_POST["genero2"] == "hombre" || $_POST["genero2"] == "masculino") {
        $hombre++;
    }
    else {
        $mujeres++;
    }
    if ($_POST["genero3"] == "hombre" || $_POST["genero3"] == "masculino") {
        $hombre++;
    }
    else {
        $mujeres++;
    }
    echo "el estudiante con la nota mayor fue {$nombreMayor} con una nota de {$notaMayor} <br>";
    echo "el estudiante con la nota menor fue {$nombreMenor} con una nota de {$notaMenor} <br>";
    echo "el total de estudiantes mujeres fueron {$mujeres} y de hombres fue {$hombre}<br>";
?>