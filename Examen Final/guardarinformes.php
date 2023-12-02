<meta http-equiv="refresh" content="3; url=read_alumno.php" />
<?php
    include('connection.php');
    $mes = $_POST['mes'];
    $sis256 = $_POST['SIS256'];
    $sis258 = $_POST['SIS258'];
    $sis406 = $_POST['SIS406'];
    $sql1 = "INSERT INTO informes(materia, mes, porcentaje) VALUES('SIS256', '$mes', $sis256)";
    mysqli_query($con, $sql1);
    echo $sql1;
    $sql2 = "INSERT INTO informes(materia, mes, porcentaje) VALUES('SIS258', '$mes', $sis258)";
    mysqli_query($con, $sql2);
    $sql3 = "INSERT INTO informes(materia, mes, porcentaje) VALUES('SIS406', '$mes', $sis406)";
    mysqli_query($con, $sql3);
    if ($con->query($sql) === TRUE) {
        echo "Se creo el registro correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close()
?>