<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>

    <form action="create_carrera.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="cuad">
        </div>
        <input type="submit" value="Crear" id="cuadcrear">


    </form>

</body>

</html>