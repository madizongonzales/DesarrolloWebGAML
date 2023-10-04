
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include('conexion.php');

    
    $sql = "SELECT fotografia FROM fotos_habitacion";

    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Fotografia</th>

            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><img src="images/<?php echo $row['fotografia'];  ?>" width="100px" ></td>

                        <?php } ?>
                    </td>

                </tr>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>




</body>

</html>