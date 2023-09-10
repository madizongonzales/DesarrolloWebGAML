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
    $sql="SELECT nombres,apellidos,CU,idcarrera from alumno where id=$id";
    $sql1 = "SELECT id,nombre from  carrera";
    $resultado1 = $con->query($sql1);
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update_alumno.php" method="post">

        <div>
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" value="<?php echo $row['nombres']?>" id="cuad">
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']?>" id="cuad">
        </div>
        <div>
        <label for="idcarrera">Carrera:</label>
            <select name="idcarrera" id="cuad">
                <?php while ($row_carrera = $resultado1->fetch_assoc()) { ?>
                    <option value="<?php echo $row_carrera['id'] ?>" 
                    <?php echo $row_carrera['id']==$row['idcarrera']?"selected":"";  ?>     ><?php echo $row_carrera['nombre'] ?></option>


                <?php } ?>

            </select>
        </div>
        <div>
            <label for="CU">CU</label>
            <input type="text" name="CU" value="<?php echo $row['CU']?>" id="cuad">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar" id="cuadcrear">


    </form>

</body>

</html>