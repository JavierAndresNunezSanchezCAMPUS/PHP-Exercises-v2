<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 6</title>
</head>
<body>
    <form action="ejercicio6.php" method="POST">
    <label>Nombre del primer estudiante</label>
        <input type="text" name="estudianteUno">
        <label>Sexo de ese estudiante</label>
            <select name="sexoUno">
                <option value=""></option>
                <option value="h">H</option>
                <option value="h">M</option>
            </select>
        <label>Nota de ese estudiante</label>
        <input type="number" name="notaUno"><br>
    <!-- ---------------------------------------------- -->
        <label>Nombre del segundo estudiante</label>
        <input type="text" name="estudianteDos">
        <label>Sexo de ese estudiante</label>
            <select name="sexoDos">
                <option value=""></option>
                <option value="h">H</option>
                <option value="m">M</option>
            </select>
        <label>Nota de ese estudiante</label>
        <input type="number" name="notaDos"><br>
    <!-- ------------------------------------------------ -->
        <label>Nombre del tercer estudiante</label>
        <input type="text" name="estudianteTres">
        <label>Sexo de ese estudiante</label>
            <select name="sexoTres">
                <option value=""></option>
                <option value="h">H</option>
                <option value="m">M</option>
            </select>
        <label>Nota de ese estudiante</label>
        <input type="number" name="notaTres"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

    $nombres = array();
    $notas = array(); 

    $sexoUno = "{$_POST["sexoUno"]}";
    $sexoDos = "{$_POST["sexoDos"]}";
    $sexoTres = "{$_POST["sexoTres"]}";
    
    $nombreUno = "{$_POST["estudianteUno"]}";
    $nombres[] = $nombreUno;
    $notaUno = "{$_POST["notaUno"]}";
    $notas[] = $notaUno;
    $nombreDos = "{$_POST["estudianteDos"]}";
    $nombres[] = $nombreDos;
    $notaDos = "{$_POST["notaDos"]}";
    $notas[] = $notaDos;
    $nombreTres = "{$_POST["estudianteTres"]}";
    $nombres[] = $nombreTres;
    $notaTres = "{$_POST["notaTres"]}";
    $notas[] = $notaTres;

    $mayor = max($notas);
    $num = array_search($mayor, $notas);
    echo "La nota más alta fue la de " . $nombres[$num] . " con una nota de " . $mayor ."<br>";
?>