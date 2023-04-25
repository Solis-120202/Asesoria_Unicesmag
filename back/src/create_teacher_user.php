<?php
    include("../config/connectionDB.php");
    // Get data
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $Code = $_POST['codde'];
    $DniNum = $_POST['dni_num'];
    $Eespeci = $_POST['e_especi'];
    $Ddispo = $_POST['d_dispo'];

    $sql = "INSERT INTO DOCENTE (nombre, apellido, codigo, dni, especialidad, disponibilidad) VALUES ('$fName', '$lName', '$Code', '$DniNum', '$Eespeci', '$Ddispo') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: TEACHER HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>