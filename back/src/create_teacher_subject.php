<?php
    include("../config/connectionDB.php");
    // Get data
    $idDocente = $_POST['id_docente'];
    $idAsignatura = $_POST['id_asignatura'];

    $sql = "INSERT INTO DOCENTE_ASIGNATURA (id_docente, id_asignatura) VALUES ('$idDocente', '$idAsignatura') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: TEACHER_SUBJECT HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>