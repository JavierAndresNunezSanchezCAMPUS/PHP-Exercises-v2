<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
</head>
<body>
    <form action="ejercicio1.php" method="POST">
        <label>Nota 1</label><input type="text" name="uno">
        <label>Nota 2</label><input type="text" name="dos">
        <label>Nota 3</label><input type="text" name="tres">
        <input type="submit" value="Calcular Promedio">
    </form>
</body>
</html>

<?php
        $notaUno = "{$_POST["uno"]}";
        floatval($notaUno);
        $notaDos = "{$_POST["dos"]}";
        floatval($notaDos);
        $notaTres = "{$_POST["tres"]}";
        floatval($notaTres);
        $total = ($notaUno + $notaDos + $notaTres)/3;
        echo "<br>";
        echo "Tu promedio es: {$total}<br>";
    if ($total <= 3.9){
        echo "Estudia";
    } else {
        echo "Becado";
    };
?>