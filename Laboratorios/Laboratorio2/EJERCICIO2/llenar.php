<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = $_GET["numero"];
    $vector = array();
    for ($i = 0; $i < $numero; $i++) {
        $vector[$i] = rand(1, 100);
    }
    
    echo "<h2>Vector generado aleatoriamente:</h2>";
    
    echo "["; 
    foreach ($vector as $indice => $valor) {
        echo $valor;
        if ($indice < count($vector) - 1) {
            echo ", ";
        }
    }
    
    echo "]";
        ?>
</body>
</html>

