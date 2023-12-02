<?php
include("connection.php");
$nombres_apellidos=$_POST['nombres_apellidos'];
$id=$_POST['id'];

$sql="UPDATE alumnos set nombres_apellidos='$nombres_apellidos'
WHERE  id=$id ";
 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=index.php" />

