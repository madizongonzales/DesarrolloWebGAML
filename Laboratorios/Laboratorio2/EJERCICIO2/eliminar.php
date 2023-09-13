<?php
    $numero = $_GET["numero"];

    function eliminar_mayores(&$vector, $numero) {
        for ($i = 0; $i < count($vector); $i++) {
            if ($vector[$i] > $numero) {
                unset($vector[$i]);
            }
        }
        $vector = array_values($vector);
    }

    $vector = array();
    for ($i = 0; $i < $numero; $i++) {
        $vector[$i] = rand(1, 100);
    }
    echo "<h2>Vector después de eliminar los mayores a $numero:</h2>";
    echo implode(", ", $vector);

?>
