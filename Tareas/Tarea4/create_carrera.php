<?php
include("conexion.php");
$nombre=$_POST['nombre'];
// $apellidos=$_POST['apellidos'];
// $CU=$_POST['CU'];
// $idcarrera=$_POST['idcarrera'];

$sql="INSERT INTO carrera(nombre) values
 ('$nombre') ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_carrera.php" />

