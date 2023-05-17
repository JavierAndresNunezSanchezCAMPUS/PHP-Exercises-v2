<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>
<body>
    <form action="ejercicio4.php" method="POST">
        <label>Nombre de la primera persona</label>
        <input type="text" name="nombreUno">
        <label>Edad de esa persona</label>
        <input type="number" name="edadUno"><br>
        <label>Nombre de la segunda persona</label>
        <input type="text" name="nombreDos">
        <label>Edad de esa persona</label>
        <input type="number" name="edadDos"><br>
        <label>Nombre de la tercera persona</label>
        <input type="text" name="nombreTres">
        <label>Edad de esa persona</label>
        <input type="number" name="edadTres"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $nombreUno = "{$_POST["nombreUno"]}";
    $edadUno = "{$_POST["edadUno"]}";
    $nombreDos = "{$_POST["nombreDos"]}";
    $edadDos = "{$_POST["edadDos"]}";
    $nombreTres = "{$_POST["nombreTres"]}";
    $edadTres = "{$_POST["edadTres"]}";

    if ($edadUno > $edadDos && $edadUno > $edadTres){
        echo "{$nombreUno} tiene más edad";
    } else if ($edadDos > $edadUno && $edadDos > $edadTres){
        echo "{$nombreDos} tiene más edad";
    } else if ($edadTres > $edadUno && $edadTres > $edadDos){
        echo "{$nombreTres} tiene más edad";
    }
?>