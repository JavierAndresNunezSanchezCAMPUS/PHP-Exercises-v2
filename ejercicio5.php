<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 5</title>
</head>
<body>
    <form action="ejercicio5.php" method="POST">
        <label>Digite el primer número</label>
        <input type="number" name="primero">
        <label>Digite el segundo número</label>
        <input type="number" name="segundo">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $first = "{$_POST["primero"]}";
    $second = "{$_POST["segundo"]}";
    if($first > $second){
        $suma = $first + $second;
        $resta = $first - $second;
        echo "La suma entre estos números es {$suma} y su diferencia es {$resta}";
    } else {
        $multi = $first * $second;
        $divi = $first / $second;
        echo "El producto entre estos números es {$multi} y el cociente es {$divi}";
    }
?>