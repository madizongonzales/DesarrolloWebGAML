<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style.css" />
</head>
</head>

<body>

    <?php include('conexion.php');

$sql = "SELECT id, nombre, correo, rol FROM usuario";

    // echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
<td>
    <div class="operaciones">
        <div class="operaciones_item">
        <a href="update.php?id=<?php echo $row['id']; ?>&rol=<?php echo ($row['rol'] == 'Usuario') ? 'Administrador' : 'Usuario'; ?>"
        style=" padding-top: 8px;
    padding-bottom: 7px; padding-left:12px; padding-right:11px; background-color: <?php echo ($row['rol'] == 'Usuario') ? 'rgb(223, 55, 55)' : 'rgb(64, 160, 82)'; ?> ; border: 3px solid <?php echo ($row['rol'] == 'Usuario') ? 'red' : 'green'; ?>">
                <?php echo ($row['rol'] == 'Usuario') ? 'Cambiar a administrador' : 'Cambiar a usuario'; ?>
            </a>
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

</body>

</html>
