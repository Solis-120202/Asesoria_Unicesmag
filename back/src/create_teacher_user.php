<?php
    include("../config/connectionDB.php");
    // Get data
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $DniNum = $_POST['dni_num'];
    $Especi = $_POST['especi'];
    $Dispo = $_POST['dispo'];
    $email = $_POST['email'];
    $pass = md5($_POST['passwd']);

    $sql1 = "INSERT INTO USUARIOS (email, password) VALUES ('$email', '$pass') ";

    if($conn -> query($sql1) === TRUE){
        $last_id = mysqli_insert_id($conn);
        $sql2 = "INSERT INTO PERSONAS (nombres, apellidos, dni, id_usuario) VALUES ('$fName', '$lName', '$DniNum', '$last_id') ";
        if($conn -> query($sql2) === TRUE){
            $last_id = mysqli_insert_id($conn);
            $sql3 = "INSERT INTO DOCENTE (especialidad, disponibilidad, id_persona) VALUES ('$Especi', '$Dispo', '$last_id') ";
            if($conn -> query($sql3) === TRUE){
                echo "<script> alert('::: USER HAS BEEN CREATED SUCCESSFULLY :::')</script>";
                header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/index.html");
            }
        }
    } else{
        echo "<script> alert('::: USER WASN'T CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/create_teacher_user.html");
    }
?>