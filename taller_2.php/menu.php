<?php
    $array = array();
    $array2 = array();
    $objetos1 = array();
    $objeto2 = array();
    $op = true;
    $opp = 0;

    while ($op == true) {
        $opp = intval(readline("Digite:\n1 Lectura de datos\n2 Crear objetos\n3 Mostrar objetos\n4 Crear Array\n5 Mostrar Array\n6 Eliminar primer elemento del array\n7 Eliminar último elemento del array\n8 Eliminar cualquier elemento del array\n9 Agregar elemento al comienzo del array\n10 Agregar elemento al final del array\n11 Crear array con objetos\n12 Iterar array con objetos usando for\n13 Iterar objetos con forEach\n14 Iterar con Map y crear copia\n15 Proceso personal\n0 para salir"));

        if ($opp == 1) {
            $nombre = readline("Digite el nombre del estudiante: ");
            $edad = intval(readline("Digite la edad: "));
            $cell = readline("Digite el teléfono: ");
            $sexo = readline("Digite el sexo: ");
        } elseif ($opp == 2) {
            $objetos1["nombre"] = $nombre;
            $objetos1["edad"] = $edad;
            $objetos1["cell"] = $cell;
            $objetos1["sexo"] = $sexo;
            print_r($objetos1);
        } elseif ($opp == 3) {
            print_r($objetos1);
        } elseif ($opp == 4) {
            $nombre = readline("Digite el nombre del estudiante: ");
            $edad = intval(readline("Digite la edad: "));
            $cell = readline("Digite el teléfono: ");
            $sexo = readline("Digite el sexo: ");
            array_push($array, $nombre, $edad, $cell, $sexo);
        } elseif ($opp == 5) {
            print_r($array);
        } elseif ($opp == 6) {
            array_shift($array);
            print_r($array);
        } elseif ($opp == 7) {
            array_pop($array);
            print_r($array);
        } elseif ($opp == 8) {
            array_splice($array, 1, 1);
            print_r($array);
        } elseif ($opp == 9) {
            $nombre = readline("Digite el nombre del estudiante: ");
            array_unshift($array, $nombre);
            print_r($array);
        } elseif ($opp == 10) {
            $sexo = readline("Digite el sexo: ");
            array_push($array, $sexo);
            print_r($array);
        } elseif ($opp == 11) {
            $objeto2["nombre"] = readline("Digite el nombre del estudiante: ");
            $objeto2["edad"] = intval(readline("Digite la edad: "));
            $objeto2["cell"] = readline("Digite el teléfono: ");
            $objeto2["sexo"] = readline("Digite el sexo: ");
            array_push($array2, $objetos1, $objeto2);
            print_r($array2);
        } elseif ($opp == 12) {
            for ($i = 0; $i < count($array2); $i++) {
                print_r($array2[$i]);
            }
        } elseif ($opp == 13) {
            foreach ($array2 as $objeto) {
                foreach ($objeto as $clave => $valor) {
                    echo $clave . ": " . $valor . "\n";
                }
                echo "------------------\n";
            }
        } elseif ($opp == 14) {
            $copiaArray = array_map(function ($objeto) {
                return $objeto;
            }, $array2);
            print_r($copiaArray);
        } elseif ($opp == 15) {
            //proceso personañ
        }

    }

    ?>