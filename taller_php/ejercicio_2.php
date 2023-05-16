<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio_2.php" method="post">
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>

<?php
    if($_POST){
        $numero = $_POST["numero"];

        if($numero % 2 == 0 && $numero > 10){
            echo "El numero es par y mayor que diez";
        }else if ($numero % 2 == 1 && $numero > 10){
            echo "El numero es impar y mayor que diez";
        }else if ($numero % 2 == 0 && $numero < 10){
            echo "El numero es par y menor que diez";
        }else if ($numero % 2 == 1 && $numero < 10){
            echo "El numero es impar y menor que diez";
        }else if ($numero == 10){
            echo "El numero es diez";
        }
    }
?>