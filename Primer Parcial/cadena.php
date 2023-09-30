<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $cadena1 = $_POST["cadena1"];
        $cadena2 = $_POST["cadena2"];
        
        if (strpos($cadena1, $cadena2) !== false) {
            echo "<p>{$cadena1} tiene la palabra {$cadena2}</p>";
            $cadena1SinCadena2 = str_replace($cadena2, "", $cadena1);
            echo '<h3>cadena1 sin la palabra de la cadena2:</h3>';
            echo "<p>{$cadena1SinCadena2}</p>";
        } else {
            echo "<p>{$cadena1} no contiene la palabra {$cadena2}</p>";
        }
    ?>
</body>
</html>
