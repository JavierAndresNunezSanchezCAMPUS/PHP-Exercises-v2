<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2</title>
</head>
<body>
    <form action="ejercicio2.php" method="POST">
    <label>Ingrese un número</label>    
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $numero = "{$_POST["numero"]}";
    if ($numero % 2 === 0){
        echo "El numero es par<br>";
    } else {
        echo "El numero es impar<br>";
    } 
    if ($numero > 10) {
        echo "Es mayor a 10";
    }
?>