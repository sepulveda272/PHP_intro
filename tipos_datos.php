<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos de datos</title>
</head>
<body>
<?php
    /* 1. String. Serie de caracteres */

    $customer = "Falcao";
    /* echo "the customer " .$customer; */
    echo "the customer {$customer} bought <br>";

    $favorite_food = "Panzerotti and a Pizza";
    echo "a {$favorite_food} <br>";


    /* 2. Integer. Es un número */

    $price = 5000;
    echo " that cost {$price}";


    /* 3. Floating point number - float - doubles - real numbers */

    $goal_rate_per_game = 4.5;
    echo "<br> and now he is celebrating his goal rate per futbol game of {$goal_rate_per_game}";

 
    /* 5. Boolean. Tiene 2 valores true o false */

    $state = true;
    echo "<br> Is Falcao a champion? that is {$state}";


    /* 4. Accer Tipos de datos */

    $type_data = gettype($price);
    $type_data_1 = gettype($state);
    $type_data_2 = gettype($goal_rate_per_game);
    echo "<br> Tipo de dato es: $type_data, $type_data_1, $type_data_2";

    ?>
</body>
</html>