<?php
    session_start();
    include('conexion.php');
    
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = SHA1('$password')";
    $consulta = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_array($consulta);
    if($usuario != null){
        $_SESSION["nivel"] = $usuario["nivel"];
        echo "Autenticado correctamente";
    } else {
        echo "No autenticado";
    }