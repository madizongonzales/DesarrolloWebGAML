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
    <?php include("connection.php");
    $id=$_GET['id'];
    $sql="SELECT nombres_apellidos from alumnos where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update_alumno.php" method="post">

        <div>
            <label for="nombres_apellidos">Nombres</label>
            <input type="text" name="nombres_apellidos" value="<?php echo $row['nombres_apellidos']?>" id="cuad">
        </div>
       
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar" id="cuadcrear">


    </form>

</body>

</html>