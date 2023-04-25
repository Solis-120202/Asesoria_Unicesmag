<?php
    include("../config/connectionDB.php");
    // Get data
    $aName = $_POST['a_name'];
    $Ccreditos = $_POST['c_creditos'];

    $sql = "INSERT INTO ASIGNATURA (nombre, creditos) VALUES ('$aName', '$Ccreditos') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: SUBJECT HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>