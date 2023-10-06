<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT nro,id_tipo_habitacion,bano_privado,espacio,precio from habitacion where id=$id";
    $sql1 = "SELECT id,descripcion from  tipo_habitacion";
    $resultado1 = $con->query($sql1);
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
     <form action="update_habitacion.php" method="post">

<div>
    <label for="nro">nro</label>
    <input type="text" name="nro" value="<?php echo $row['nro']?>" id="cuad">
</div>
<div>
<label for="id_tipo_habitacion">descripcion:</label>
    <select name="id_tipo_habitacion" id="cuad">
        <?php while ($row_descripcion = $resultado1->fetch_assoc()) { ?>
            <option value="<?php echo $row_descripcion['id'] ?>" 
            <?php echo $row_descripcion['id']==$row['id_tipo_habitacion']?"selected":"";  ?>     ><?php echo $row_descripcion['descripcion'] ?></option>


        <?php } ?>

    </select>
</div>
<div>
    <label for="bano_privado">bano_privado</label>
    <input type="text" name="bano_privado" value="<?php echo $row['bano_privado']?>" id="cuad">
</div>
<div>
    <label for="espacio">espacio</label>
    <input type="text" name="espacio" value="<?php echo $row['espacio']?>" id="cuad">
</div>
<div>
    <label for="precio">precio</label>
    <input type="text" name="precio" value="<?php echo $row['precio']?>" id="cuad">
</div>

<input type="hidden" name="id" value="<?php echo $id?>">
<input type="submit" value="Editar" id="cuadcrear">


</form>

</body>

</html>