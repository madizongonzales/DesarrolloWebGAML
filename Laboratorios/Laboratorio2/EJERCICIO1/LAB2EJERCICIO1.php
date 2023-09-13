<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="LAB2EJERCICIO1.css" />
</head>

<body>
    <h1>Resultado de Conversión</h1>
    <div id="resultado">
        <?php
          $cantidad = floatval($_GET["cantidad"]);
          $unidad_medida = $_GET["unidad_medida"];
          $unidad_destino = $_GET["unidad_destino"];
          $conversion = 0;

            switch ($unidad_medida) {
                case "milimetro":
                    switch ($unidad_destino) {
                        case "milimetro":
                            $conversion = $cantidad;
                            break;
                        case "centimetro":
                            $conversion = $cantidad / 10;
                            break;
                        case "decimetro":
                            $conversion = $cantidad / 100;
                            break;
                        case "metro":
                            $conversion = $cantidad / 1000;
                            break;
                        case "kilometro":
                            $conversion = $cantidad / 1000000;
                        }
                    }

            echo "$cantidad $unidad_medida es igual a $conversion $unidad_destino.";
        
        ?>
    </div>

</body>

</html>