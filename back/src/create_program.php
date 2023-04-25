<?php
    include("../config/connectionDB.php");
    // Get data
    $pName = $_POST['p_name'];

    $sql = "INSERT INTO PROGRAMA (nombre) VALUES ('$pName') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: PROGRAM HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>