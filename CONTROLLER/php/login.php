<?php

include("config.php");
session_start();
if(isset($_SESSION['id_usuario'])){
    header("Location: ../../VIEWS/app/home.php");
}
//Login

if(isset($_POST['login'])){

    $user = $_POST['user'];
    $password = $_POST['password'];
    
    $consulta = "SELECT usu_id FROM usuario WHERE usu_email= '$user' AND usu_contraseña='$password' ";
    $resultado = $conex->query($consulta);
    $rows = $resultado->num_rows;

    if($rows > 0){
        $row = $resultado->fetch_assoc();
        $_SESSION['id_usuario'] = $row["usu_id"];

        header("Location:../../VIEWS/app/home.php");
    }else{
        echo "<script> alert('Lo sentimos, el usuario o la contraseña son incorrectos.');
        window.location = '../../VIEWS/app/login.php';</script>";
        
    }
        
}