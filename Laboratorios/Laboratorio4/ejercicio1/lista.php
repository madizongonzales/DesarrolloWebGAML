<?php
$datos = array(
    array("Nro" => 1, "Apellidos" => "Juan", "Nombres" => "Perez", "Edad" => 25, "Materia" => "SIS-256", "Nota" => 83),
    array("Nro" => 2, "Apellidos" => "Ricardo", "Nombres" => "Luna", "Edad" => 30, "Materia" => "SIS-258", "Nota" => 70),
    array("Nro" => 3, "Apellidos" => "Teresa", "Nombres" => "Tomasa", "Edad" => 26, "Materia" => "SIS-256", "Nota" => 84),
    array("Nro" => 4, "Apellidos" => "Favian", "Nombres" => "Umbr", "Edad" => 24, "Materia" => "SIS-258", "Nota" => 70)
);

echo json_encode($datos);
?>
