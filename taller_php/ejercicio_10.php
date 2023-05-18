<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio_10.php" method="post">
        <label>Primer Numero</label>
        <input type="number" name="nam1">
        <label for="">Segundo Numero</label>
        <input type="number" name="nam2">
        <label for="">Tercer Numero</label>
        <input type="number" name="nam3">
        <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php
    $numero_1 = $_POST["nam1"];
    $numero_2 = $_POST["nam2"];
    $numero_3 = $_POST["nam3"];
    $suma = $numero_1 + $numero_2 + $numero_3;
    $promedio = ($numero_1 + $numero_2 + $numero_3)/3;
    $Total_valores = 3;
    $mayorNumero = 0; 
    $menorNumero = 999; 
    if ($numero_1 > $mayorNumero) {
        $mayorNumero = $numero_1;
    }
    if ($numero_2 > $mayorNumero) {
        $mayorNumero = $numero_2;
    }
    if ($numero_3 > $mayorNumero) {
        $mayorNumero = $numero_3;
    }
    if ($numero_1 < $menorNumero) {
        $menorNumero = $numero_1;
    }
    if ($numero_2 < $menorNumero) {
        $menorNumero = $numero_2;
    }
    if ($numero_3 < $menorNumero) {
        $menorNumero = $numero_3;
    }
    echo "la suma de los valores es de {$suma} su promedio es de {$promedio}<br>
    el total de los valores registrados fue de {$Total_valores}<br>
    el numero mayor fue {$mayorNumero} y el menor fue {$menorNumero}"
?>