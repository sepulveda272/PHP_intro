<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="ejercicio_1.php" method="post">
        <h1><strong>Calificaciones Finales</strong></h1>

        <h3><strong>Matematicas</strong></h3>
        <label><strong>Nota:</strong></label>
        <br>
        <input type="text" name="matematicas">
        <br><br>

        <h3><strong>Español</strong></h3>
        <label><strong>Nota:</strong></label>
        <br>
        <input type="text" name="spanish">
        <br><br>

        <h3><strong>Programación</strong></h3>
        <label><strong>Nota:</strong></label>
        <br>
        <input type="text" name="programacion">
        <br><br><br>

        <input type="submit" value="Send">

    </form>
    <br><br>
</body>
</html>


<?php
    $nMat = floatval($_POST["matematicas"]);
    $nEsp = floatval($_POST["spanish"]);
    $nPro = floatval($_POST["programacion"]);
    

    $promedio = ($nMat + $nEsp + $nPro) / 3;

    if($promedio <= 3.9){
        echo "Su promedio es de: {$promedio} <br> DEBE ESTUDIAR MAS!!!";
    }else{
        echo "Su promedio es de: {$promedio} <br> ¡Felicitaciones! ¡Ha sido BECADO!  ";
    }

?>