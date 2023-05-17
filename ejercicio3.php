<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3</title>
</head>
<body>
    <form action="ejercicio3.php" method="POST">
        <label>Resistencia: <input type="text" name="resis">10</input></label>
        <label>Intensidad: <input type="text" name="inten">8</input></label>
        <label>Voltaje: ???</label>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php
    $resitencia = "{$_POST["resis"]}";
    $intensidad = "{$_POST["inten"]}";
    $total = $resitencia * $intensidad;
    echo "<br>";
    echo "El voltaje es: {$total}";
?>