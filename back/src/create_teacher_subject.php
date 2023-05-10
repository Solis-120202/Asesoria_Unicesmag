<?php
    include("../config/connectionDB.php");
    // Get data
    $idDocente = $_POST['id_docente'];
    $idAsignatura = $_POST['id_asignatura'];

    $sql = "INSERT INTO DOCENTE_ASIGNATURA (id_docente, id_asignatura) VALUES ('$idDocente', '$idAsignatura') ";

    //$conn -> query($sql);

    if( $result -> num_rows > 0) {
        header("Location:http://127.0.0.1/Asesorias_Unicesmag/front/src/create_consultancy.html");
    } else{
        //echo " ::: THE USER DOEN'T EXIST OR INVALID DATA :::" ;
        echo "<script>alert('::: THE USER DOES NOT EXIST OR INVALID DATA :::') </script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/index.html");
    }
?>