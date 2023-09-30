<?php
if (isset($_GET['id']) && isset($_GET['rol'])) {
    $id = $_GET['id'];
    // $nombre = $_GET['nombre'];
    // $correo = $_GET['correo'];
    $nuevoRol = $_GET['rol'];

    include('conexion.php');
    $sql = "UPDATE usuario SET rol = '$nuevoRol' WHERE id = $id";
//echo $sql;
    if ($con->query($sql) === TRUE) {
        echo "Rol actualizado correctamente.";
    } else {
        echo "Error al actualizar el rol: " . $con->error;
    }
?>
    <meta http-equiv="refresh" content="3; url=pregunta5.php" />
    <?php
    exit;
}
?>
