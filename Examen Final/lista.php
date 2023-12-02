<?php
    $materia = $_GET['materia'];
    echo $materia;
    include("connection.php");
    $sql = "SELECT id, nombres_apellidos FROM alumnos WHERE materia = '$materia'";
    $consulta = mysqli_query($con, $sql);
?>
<table border=1>
    <tr>

        <td>Nombre y Apellidos</td>
        <td>Operaciones</td>

    </tr>
    <?php while($alumno = mysqli_fetch_array($consulta)){ ?>
        <tr>

            <td><?php echo $alumno["nombres_apellidos"]; ?></td>
            <td>
                        <div class="operaciones">
                        <div class="operaciones_item">
                        <a href="form_update_alumno.php?id=<?php echo $alumno['id'];?>">Editar</a>
                        </div>
                        <div class="operaciones_itemE">
                        <a href="delete_alumno.php?id=<?php echo $alumno['id'];?>">Eliminar</a>
                        </div>
                        </div>

                        
                </td>
        </tr>
    <?php } ?>
</table>