<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 9</title>
</head>
<body>
    <form action="ejercicio9.php" method="POST">     
        <?php
                if($_POST){
                    $cantidad = 3;
                    for($i=1; $i < $cantidad + 1; $i++){
                        echo "<label>Digite nombre {$i}</label>
                        <input type='text' name='nombre{$i}'>
                        <label>Digite marca {$i}</label>
                        <input type='number' step='any' name='marca{$i}'> <br>";
                        
                    }
                    if ($_POST){
                        $total = array();
                        $nombreMayor;
                        $numeroMayor = 0;
                        $numeroMenor = 99999999;

                        for ($i=1; $i <$cantidad + 1; $i++) { 
                            $add = array($_POST["marca{$i}"], $_POST["nombre{$i}"]);
                            array_push($total, $add);
                        }

                        for ($i=0; $i < $cantidad ; $i++) { 
                            if ($total[$i][0] > $numeroMayor){
                                $numeroMayor = $total[$i][0];
                                $nombreMayor = $total[$i][1];
                            };
                        }
                        if($numeroMayor > 15.5){
                            echo "<br>";
                            echo "El atleta {$nombreMayor} ha superado el record con {$numeroMayor} y gana 500 millones";
                        } else {
                            echo "<br>";
                            echo "El atleta con mayor marca es: {$nombreMayor} con una marca de {$numeroMayor}";
                        }
                    }
                }
                
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>