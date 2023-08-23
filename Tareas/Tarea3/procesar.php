<?php
include ('funcion.php'); // Incluir el archivo con la función

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cadena"])) {
        $cadena = $_POST["cadena"];

        $palabraMasLarga = PalabraMasLarga($cadena);

        echo "La palabra más larga es: $palabraMasLarga";
    }
}
?>