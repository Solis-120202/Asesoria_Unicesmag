<?php
    include("../config/connectionDB.php");
    // Get data
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $Code = $_POST['codde'];
    $DniNum = $_POST['dni_num'];
    $celPhone = $_POST['cel_phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO COORDINADOR (nombre, apellido, codigo, dni, celular, email) VALUES ('$fName', '$lName', '$Code', '$DniNum', '$celPhone', '$email') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: COORDINATOR HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>