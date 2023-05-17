<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 7</title>
</head>
<body>
<form action="ejercicio7.php" method="POST">
    <label>Producto</label>
        <input type="text" name="producto">  
    <label>Precio</label>
        <input type="number" name="precio"> 
    <label>Cantidad</label>
        <input type="number" name="cantidad"> 
        <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php

echo "Compró {$_POST["producto"]}<br>";
$prod = "{$_POST["precio"]}";
$cant = "{$_POST["cantidad"]}";

$producto = $prod * $cant;

echo "Total a pagar: {$producto}$";

?>