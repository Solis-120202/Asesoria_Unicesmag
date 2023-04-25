<?php
    include("../config/connectionDB.php");
    // Get data
    $tAseso = $_POST['t_aseso'];
    $Fecha = $_POST['fecha'];
    $Hora = $_POST['hora'];
    $Duraci = $_POST['duraci'];
    $idEstu = $_POST['id_estu'];
    $idDocen = $_POST['id_docen'];
    $idAsig = $_POST['id_asig'];
    $idCoor = $_POST['id_coor'];

    $sql = "INSERT INTO ASESORIA (tipo_asesoria, fecha, hora, duracion, id_estudiante, id_docente, id_asignatura, id_coordinador) VALUES ('$tAseso', '$Fecha', '$Hora', '$Duraci', '$idEstu', '$idDocen', '$idAsig', '$idCoor') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: CONSULTANCY HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>  