<?php
    include("../config/connectionDB.php");
    // Get data
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //Create Query
    $sql = "SELECT * FROM DOCENTE WHERE codigo = '$email' AND dni = '$password'";
    $result = $conn -> query ($sql);

    if( $result -> num_rows > 0) {
        echo " ::: THE USER DOEN'T EXIST OR INVALID DATA ::: ";
    } else{
        echo " ::: THE USER EXISTS :::" ;
    }
?>