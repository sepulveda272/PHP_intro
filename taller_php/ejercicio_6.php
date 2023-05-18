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
    <label for="contador">Ingrese la cantidad de estudiantes: </label>
    <input type="number" name="contador">
    <input type="submit" value="Enviar">
</form>
<form action="" method="post">
<?php
    $contador = $_POST["contador"];
    $nombres = [];
    $sexos = [];
    $notas = [];
    $numeroMujeres = 0;
    $numeroHombres = 0;

    for ($i=1; $i <= $contador; $i++) {
        echo "
        <label>Digitar Nombre {$i}</label>
        <input type='text' name='nombre$i' >

        <label>Digitar Sexo {$i}</label>
        <select name='genero$i'>
            <option value=''>Seleccione</option>
            <option value='hombre'>hombre</option>
            <option value='mujer'>mujer</option>
        </select>
        
        <label>Digitar Nota {$i}</label>
        <input type='number' name='nota$i' step='0.1'><br><br>";
    }

    echo "<input type='hidden' name='contador' value='$contador'>";
    echo "<input type='submit' value='subir datos' name='envio'><br>";

    for ($i=1; $i <= $contador; $i++) {
        $nombre = $_POST["nombre$i"];
        $sexo = $_POST["genero$i"];
        $nota = $_POST["nota$i"];
        $nombres[] = $nombre;
        $sexos[] = $sexo;
        $notas[] = $nota;

        if($sexo){
            if($sexo == 'hombre'){
                $numeroHombres++;
            }else{
                $numeroMujeres++;
            }
        }
    } 
    
    $notaMayor = max($notas);
    $notaMenor = min($notas);
    $posicionMayor = array_search($notaMayor, $notas);
    $posicionMenor = array_search($notaMenor, $notas);
    $estudianteMax = array_values($nombres)[$posicionMayor];
    $estudianteMin = array_values($nombres)[$posicionMenor];    

    echo "<br>El estudiante con mayor nota es: $estudianteMax con una nota de $notaMayor";
    echo "<br>El estudiante con menor nota es: $estudianteMin con una nota de $notaMenor";
    echo "<br>Hay un total de $numeroHombres hombres y $numeroMujeres mujeres"
    ?>
</form>
</body>
</html>