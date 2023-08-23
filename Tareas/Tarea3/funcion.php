<?php
function PalabraMasLarga($cadena) {
    $palabras = explode(" ", $cadena);
    $palabraMasLarga = "";

    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) { //devuelve el numero de bytes
            $palabraMasLarga = $palabra;
        }
    }

    return $palabraMasLarga;
}
?>