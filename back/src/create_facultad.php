<?php
    include("../config/connectionDB.php");
    // Get data
    $faName = $_POST['fa_name'];

    $sql = "INSERT INTO FACULTAD (nombre) VALUES ('$faName') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        //echo " ::: FACULTY HAS BEEN CREATED SUCCESSFULLY ::: ";
        echo "<script> alert('::: USER HAS BEEN CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_facultad.html");
    } else{
        //echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
        echo "<script> alert('::: FACULTY WASN'T CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_facultad.html");
    }
?>