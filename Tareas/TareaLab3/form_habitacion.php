<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,descripcion from tipo_habitacion";
    $resultado = $con->query($sql);
    ?>

    <form action="create_habitacion.php" method="post">
        <div>
            <label for="nro">Numero</label>
            <input type="number" name="nro" id="cuad">
        </div>
        <div>
        <label for="id_tipo_habitacion">Descripcion:</label>
            <select name="id_tipo_habitacion" id="cuad">
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['descripcion'] ?></option>


                <?php } ?>

            </select>
        </div>
        <div>
            <label for="bano_privado">Banio Privado</label>
            <input type="text" name="bano_privado" id="cuad">
        </div>
        <div>
            <label for="espacio">espacio</label>
            <input type="text" name="espacio" id="cuad">
        </div>
        <div>
            <label for="precio">precio</label>
            <input type="number" name="precio" id="cuad">
        </div>
       
        <input type="submit" value="Crear" id="cuadcrear">


    </form>

</body>

</html>