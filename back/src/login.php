<?php
    include("../config/connectionDB.php");
    // Get data
    $Code = $_POST['codde'];
    $password = md5($_POST['dni_num']);

    //Create Query
    $sql = "SELECT * FROM DOCENTE WHERE codigo = '$Code' AND dni = '$password'";
    $result = $conn -> query ($sql);

    if( $result -> num_rows > 0) {
        echo " ::: THE USER DOEN'T EXIST OR INVALID DATA ::: ";
    } else{
        echo " ::: THE USER EXISTS :::" ;
    }
?>