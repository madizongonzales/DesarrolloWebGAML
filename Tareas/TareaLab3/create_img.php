<?php


include("conexion.php");

$archivo_original=$_FILES['fotografia']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$fotografia=uniqid().'.'.$extension;

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);


$sql="INSERT INTO fotos_habitacion(fotografia) values
 ('$fotografia') ";

 echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_img.php" />


