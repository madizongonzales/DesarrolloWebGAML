<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>HABITACIONES</h1>
    <?php include('conexion.php');

    $sql = "SELECT h.id,nro,bano_privado,espacio,precio, t.descripcion as descripcion FROM habitacion h
    LEFT JOIN tipo_habitacion t on h.id_tipo_habitacion = t.id ";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Nro</th>
                <th>Descripcion</th>
                <th>Banio Privado</th>
                <th>Espacio</th>
                <th>Precio</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['bano_privado']; ?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>

                    <td>
                        <div class="operaciones">
                        <div class="operaciones_item">
                        <a href="form_update_habitacion.php?id=<?php echo $row['id'];?>">Editar</a>
                        </div>
                        <div class="operaciones_itemE">
                        <a href="delete_habitacion.php?id=<?php echo $row['id'];?>">Eliminar</a>
                        </div>
                        <div class="operaciones_itemE">
                        <a href="read.php?id=<?php echo $row['id'];?>">imgs</a>
                        </div>
                        </div>

                        
                </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
<div class="op">

    <div class="operaciones_item1">
    <a href="form_habitacion.php">Crear Nuevo habitacion</a>
    </div>
</div>

</body>

</html>