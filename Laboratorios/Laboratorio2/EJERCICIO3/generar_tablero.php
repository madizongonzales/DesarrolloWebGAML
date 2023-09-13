<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_tablero.css">
</head>
<body>
    <h1>Tablero de Damas</h1>
    <div id="contenedor">
        <?php
            $filas = intval($_GET["filas"]);
            $columnas = intval($_GET["columnas"]);
            $color = $_GET["color"];
            echo "<div id='tablero'>";
            for ($i = 0; $i < $filas; $i++) {
                for ($j = 0; $j < $columnas; $j++) {
                    $clase = ($i + $j) % 2 == 0 ? $color : "blanco";
                    echo "<div class='casilla $clase'></div>";
                }
                echo "<br>";
            }
            echo "</div>";
        ?>
    </div> 
</body>
</html>