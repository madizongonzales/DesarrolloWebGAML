<?php
    include ('funcion.php');
    if (isset($_GET["cadena"])) {
        $cadena = $_GET["cadena"];
        $palabraMasLarga = PalabraMasLarga($cadena);
        echo "<p>La palabra más larga es: $palabraMasLarga</p>";
    }
?>