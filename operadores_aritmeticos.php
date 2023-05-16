<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores Aritmeticos</title>
</head>
<body>
    <?php
    /* 1. Aritmetics Operators */
        // + - * / ** %  //

        $x = 20;
        $y = 3;
        $z = null;
        $z1 = null;
        $z2 = null;
        $z3 = null;
        $z4 = null;
        $z5 = null;

        /* + */
        $z = $x + $y;
        /* - */
        $z1 = $x - $y;
        /* * */
        $z2 = $x * $y;
        /* / */
        $z3 = $x / $y;
        /* ** */
        $z4 = $x ** $y;
        /* % */
        $z5 = $x % $y;


        echo "$z <br>";
        echo "$z1 <br>";
        echo "$z2 <br>";
        echo "$z3 <br>";
        echo "$z4 <br>";
        echo "$z5 <br>";


        /* 2. Increment/Decrement Operators */
        // 2.1 Incrementp/Decrement en 1 (++ --)   //

        /* ++ */
        $counterMas = 1;
        $counterMas ++;
        echo "$counterMas <br>";

        /* -- */
        $counterMenos = 10;
        $counterMenos --;
        echo "$counterMenos <br>";

        // 2.2 Increment/Decrement en 2 o más valores //

        /* + */
        $counterM = 15;
        $counterM += 2;
        echo "$counterM <br>";

        /* - */
        $counterm = 20;
        $counterm -= 5;
        echo "$counterm <br>";


        /* 3. Jerarquían - precedente */
        // 3.1 () //
        // 3.2 ** //
        // 3.3 * / % //
        // 3.4 + - //

        $total = 4 + 6 * 2;
        echo "$total <br>";
        ?>
</body>
</html>