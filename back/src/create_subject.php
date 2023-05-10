<?php
    include("../config/connectionDB.php");
    // Get data
    $pName = $_POST['p_name'];
    $Credi = $_POST['credi'];

    $sql = "INSERT INTO ASIGNATURA (nombre, creditos) VALUES ('$pName', '$Credi') ";

    if($conn -> query($sql) === TRUE){
        //echo " ::: PROGRAM HAS BEEN CREATED SUCCESSFULLY ::: ";
        echo "<script> alert('::: SUBJECT HAS BEEN CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/create_subject.html");
    } else{
        //echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
        echo "<script> alert('::: SUBJECT WASN'T CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/create_subject.html");
    }
?>  