<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            background-color: #F79646;
        }
        table {
            width: 100%;
            height: 150px;
            border-collapse: collapse;
        }

        tr.impar td {
            background-color: #FDE9D9;
        }

        td {
            text-align: center;
        }
        .cont{
            width: 150px;
        }
        body{
    display: flex;
    justify-content: center;
    margin: auto;
    font-family: Arial, Helvetica, sans-serif;
}
    </style>
</head>
<body>
<div class="cont">
<?php
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];

        $ultimoDiaMes = date('t', strtotime("$anio-$mes-01"));
        $numeroDiaSemana = date('w', strtotime("$anio-$mes-01"));

        $diasSemana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');

        echo '<h2>Calendario de ' . $mes .  '</h2>';
        echo '<table border="1">';
        echo '<tr>';
        foreach ($diasSemana as $dia) {
            echo '<th>' . $dia . '</th>';
        }
        echo '</tr>';

        $dia = 1;

for ($i = 0; $i < 6; $i++) {
    echo '<tr' . ($i % 2 == 0 ? '' : ' class="impar"') . '>';
    for ($j = 0; $j < 7; $j++) {
        if ($i === 0 && $j < $numeroDiaSemana) {
            echo '<td></td>';
        } elseif ($dia <= $ultimoDiaMes) {
            echo '<td>' . $dia . '</td>';
            $dia++;
        } else {
            echo '<td></td>';
        }
    }
    echo '</tr>';
}
        echo '</table>';
    ?>
</div>

</body>
</html>
