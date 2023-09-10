<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>CARRERAS</h1>
    <?php include('conexion.php');

$sql = "SELECT id, nombre FROM carrera";
    // echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    
                    <td><?php echo $row['nombre']; ?></td>
                    <td>                        
                        <div class="operaciones">
                        <div class="operaciones_item">
                        <a href="form_update_carrera.php?id=<?php echo $row['id'];?>">Editar</a>
                        </div>
                        <div class="operaciones_itemE">
                        <a href="delete_carrera.php?id=<?php echo $row['id'];?>">Eliminar</a>
                        </div>
                        </div> </td>

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
<a href="formu_carrera.php">Crear Nueva Carrera</a>
</div>
<div class="operaciones_item1">
<a href="menu_alumnos_carreras.html">Volver al Menu</a>
</div>
</div>





</body>

</html>