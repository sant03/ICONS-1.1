<?php

include("config.php");

if(isset($_POST['register'])){

    $names = $_POST['names'];
    $lnames = $_POST['lnames'];
    $birthDate = $_POST['birthDate'];
    $age = $_POST['age'];
    $idUser = $_POST['idUser'];
    $email = $_POST['email'];
    $tel =$_POST['tel'];
    $password = $_POST['password'];

    $consultaValidacion = "SELECT usu_id FROM usuario WHERE usu_id = $idUser";
    $resultadoValidacion = mysqli_query($conex,$consultaValidacion);

    if(empty($resultadoValidacion)){
        echo '<script> alert("Este usuario ya existe.");
        window.location.href = "../../VIEWS/app/sign-up.php";</script>';
        
    }else{
        $consulta = "INSERT INTO usuario 
                (usu_id, usu_nombres, usu_apellidos, usu_fecha_nacimiento, usu_edad, usu_telefono, usu_email, usu_contraseña) 
                VALUES 
                ('$idUser','$names','$lnames','$birthDate','$age','$tel','$email','$password')";
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
                
            echo '<script> alert("Felicidades, usted se ha registrado exitosamente.")
            window.location.href = "../../VIEWS/app/login.php";</script>';
                
        }else{

            echo '<script> alert("Ups, ha ocurrido un error");</script>';
                
        }
    } 
        
}


?>