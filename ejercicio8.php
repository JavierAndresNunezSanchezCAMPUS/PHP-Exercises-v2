<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIOS 8</title>
</head>
<body>
<form action="ejercicio8.php" method="POST">
    <h1>POLIGONOS</h1>
    <label><b>PERIMETRO DE UN CUADRADO</b></label><br><br>
      <label>Valor del lado</label>
      <input type="number" name="perimetro"><br><br>
    <label><b>ÁREA DE UN RECTANGULO</b></label><br><br>
    <label>Base del rectangulo</label>
         <input type="number" name="base"> 
    <label>Altura del rectangulo</label>
         <input type="number" name="altura">
         <input type="submit" value="Enviar">
</form><br><br><br>
</body>
</html>

<?php

    $peri = "{$_POST["perimetro"]}";
    $base = "{$_POST["base"]}";
    $alt = "{$_POST["altura"]}";
    
    $perimetroTotal = $peri * 4;
    $areaTotal = $base * $alt;

    echo "El perimetro total del cuadrado es: {$perimetroTotal}<br><br>";
    echo "El área total del rectangulo es: {$areaTotal}";

?>