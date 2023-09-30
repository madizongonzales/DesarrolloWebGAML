<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'Calculadora.php';

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $operacion = $_GET['operacion'];

        $calculadora = new Calculadora($numero1, $numero2);

        switch ($operacion) {
            case 'suma':
                $resultado = $calculadora->sumar();
                break;
            case 'resta':
                $resultado = $calculadora->restar();
                break;
            case 'multiplicacion':
                $resultado = $calculadora->multiplicar();
                break;
            case 'dividision':
                $resultado = $calculadora->dividir();
                break;
            default:
                $resultado = "Operación no válida.";
                break;
        }

        echo "<p>Resultado de la $operacion: $resultado</p>";

    ?>
</body>
</html>
