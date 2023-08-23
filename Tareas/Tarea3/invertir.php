<?php
    if (isset($_GET["cadena"])) {
        $cadena = $_GET["cadena"];
        $cadenaInvertida = strrev($cadena);

        echo "<h2>Cadena Invertida:</h2>";
        echo "<p>$cadenaInvertida</p>";
    }
?>