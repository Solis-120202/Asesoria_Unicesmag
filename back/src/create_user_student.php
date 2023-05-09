<?php
    include("../config/connectionDB.php");
    // Get data
    $Code = $_POST['codde'];
    $DniNum = md5($_POST['dni_num']);
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $celPhone = $_POST['cel_phone'];
    $idProgram = $_POST['id_program'];

    $sql = "INSERT INTO ESTUDIANTE (codigo, dni, nombre, apellido, celular, id_programa) VALUES ('$Code', '$DniNum', '$fName', '$lName', '$celPhone', '$idProgram') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        echo " ::: STUDENT HAS BEEN CREATED SUCCESSFULLY ::: ";
    } else{
        echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
    }
?>