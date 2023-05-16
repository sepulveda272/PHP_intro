<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="factura.php" method="post">
        <label for="">Elige la cripto</label>
        <select name="criptoMoneda" id="criptoMoneda">
            <option value="">seleccione la criptoMoneda</option>
            <option value="BTC">Bitcoin</option>
            <option value="ETH">Ether</option>
            <option value="BNB">Binance Coin</option>
            <option value="USDT">Tether</option>
        </select>
        <label for="">Cantidad</label>
        <input type="number" name="cantidadCrip" id="">
        <label for="">Precio</label>
        <input type="number" name="precioCrip" id="">
        <input type="submit" value="Send">
    </form>
</body>
</html>

<?php
    $bit = $_POST['criptoMoneda'];
    $cantidad = $_POST ['cantidadCrip'];
    $precio = $_POST ['precioCrip'];

    $math = $cantidad * $precio;

    echo "El nombre de la criptomoneda elegida es {$bit} <br> la cantidad comprada es: {$math}";
?>