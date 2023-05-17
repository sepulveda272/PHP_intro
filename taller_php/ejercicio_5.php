<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ejercicio_5.css">
</head>
<body>
    <form action="ejercicio_5.php" method="post">
        <label for="primerNumero">Digite el primer numero:</label>
        <input type="number" name="primerNumero" id="primerNumero">
        <label for="segundoNumero">Digite el segundo numero:</label>
        <input type="number" name="segundoNumero" id="segundoNumero">
        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>

<?php
    if ($_POST) {
        $numero1 = $_POST["primerNumero"];
        $numero2 = $_POST["segundoNumero"];

        if($numero1 > $numero2){
            $suma = $numero1 + $numero2;
            $diferencia = $numero1 - $numero2;
            echo "<br> La suma de estos dos numeros es: {$suma} <br>";
            echo "La diferencia entre estos dos numeros es: {$diferencia}";
        }elseif($numero1 < $numero2){
            $producto = $numero1 * $numero2;
            $division = $numero1 / $numero2;
            echo "<br> El producto de estos dos numeros es: {$producto} <br>";
            echo "La division de estos dos numeros es: {$division}";
        }
    }
?>