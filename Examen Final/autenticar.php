<?php
    session_start();
    include('connection.php');
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM usuarios where usuario='$usuario'";
    $resultado = $con->query($sql);
    if($resultado->num_rows > 0){
        $fila = $resultado->fetch_assoc();
        $_SESSION["id"] = $fila["id"];
        echo 'Se logueo con exito';
        header("Location:index.php");
    } else {
        echo 'No autorizado';
    }

