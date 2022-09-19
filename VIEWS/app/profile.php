<?php

include("../../CONTROLLER/php/config.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: login.php");
}
$idUser = $_SESSION['id_usuario'];
$consulta = "SELECT usu_id, usu_nombres, usu_apellidos FROM usuario WHERE usu_id = '$idUser'";
$resultado = $conex->query($consulta);
$row = $resultado->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil - ICONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/home.css">
</head>
<body class="container-fluid">

    <!--Menu OffCanvas-->
    <div class="offcanvas offcanvas-start" id="menu" style="width:300px">
        <div class="offcanvas-header">
          <img src="../assets/imagenes/logo.jpeg" alt="" style="width:250px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body menu-link">
          <a href="home.php" class="text-decoration-none text-secondary fw-bold d-block p-3"><i class="bi bi-house-door-fill me-3"></i>Home</a>
          <a href="usuarios.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-people-fill me-3"></i>Usuarios</a>
          <a href="ventas.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-receipt me-3"></i>Ventas</a>
          <a href="compras.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-cart-fill me-3"></i>Compras</a>
          <a href="clientes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-person-check-fill me-3"></i>Clientes y Proveedores</a>
          <a href="ordenes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-receipt-cutoff me-3"></i></i>Orden Compra</a>
          <a href="#" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-gear-fill me-3"></i>Ajustes</a>
          <a href="../../CONTROLLER/php/logout.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-box-arrow-right me-3"></i>Salir</a>
        </div>
    </div>
      
      <!-- Menu -->
    <div class="row pt-3 fixed-top bg-light">
        <div class="col-1 m-auto">
            <button class="btn btn-outline-none fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
                <i class="bi bi-list me-2"></i> Menu
            </button>
        </div>

        <!--Header -->
        <div class="col-8 m-auto">
            <h1><a href="usuarios.php"><i class="bi bi-arrow-left-circle me-2"></i></a>Mi cuenta, 
                <span class="text-success">
                    <?php
                        echo utf8_decode($row['usu_nombres']." ". $row['usu_apellidos']);                     
                    ?>
                </span>
            </h1>
            <p class="fw-bold">Se unio el <span class="text-secondary">14/09/2022</span></p>
        </div>
        <div class="col-1">
            <img src="../assets/imagenes/image-12.svg" alt="" style="width:100px">
        </div>
        <div class="col-1 m-auto">
            <div class="dropdown">
                <h1 class="m-auto text-end" data-bs-toggle="dropdown"><i class="bi bi-bell-fill"></i></h1>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-exclamation-circle-fill text-danger"></i> Bolsa de 3 kilos <span class="text-danger">Por agotarse</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-receipt-cutoff text-success"></i> Nueva orden de compra disponible<span class="text-success"> 001</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item"></li>
                    
                </ul>
            </div>
        </div>
        <div class="col-1 m-auto">
            <div class="dropdown">
                <button class="btn btn-outline-none" data-bs-toggle="dropdown"><img src="../assets/imagenes/user-icon.png" alt="" style="width:70px ;" class="rounded rounded-circle img-thumbnail"></button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <h6><i class="bi bi-person-circle"></i> Mi perfil</h6>
                    </li>
                    <li class="dropdown-item">
                        <h6><i class="bi bi-question-circle-fill"></i> Ayuda</h6>
                    </li>
                    <li class="dropdown-item">
                        <h6><i class="bi bi-box-arrow-right"></i> Salir</h6>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="divider">
    </div>
      
    <br>
    <br>

    <!--Main-->
    <section class="row mt-5 pt-5 ms-4 mb-4 overflow-auto" style="height:740px">
        <div class="row">
            <div class="col text-end">
                <button class="btn btn-outline-info mb-3"><i class="bi bi-pencil-square me-2"></i>Editar informacion de usuario</button>
            </div>
        </div>
        <hr>

        <!--Mi info-->
        <div class="row mt-3">
            <div class="col-2">
                <img src="../assets/imagenes/user-icon.png" alt="" class="d-block" style="width:200px;">
                <button type="file" class="btn btn-outline-none ms-5"><i class="bi bi-camera-fill"></i></button>
            </div>
            <div class="col-8 d-flex justify-content-between">
                <?php 
                include('../../CONTROLLER/php/showProfile.php');
                ?>
            </div>
        </div>

        <!--Configuracion usuario -->
        <div class="row mt-3 mb-3">
            <div class="col">
                <h5 class="text-info">Configuracion avanzada de usuario</h5>
                <button class="btn btn-outline-warning mt-2 shadow">Cambiar contraseña <img src="../assets/imagenes/key-icon.png" alt="" style="width:30px"></button>
            </div>
            <hr class="mt-4">
        </div>

        <!--Actividad reciente-->
        <div class="row">
            <div class="col d-flex justify-content-between">
                <h3>Actividad Reciente</h3>
                <button class="btn btn-outline-info fw-bold"> <img src="../assets/imagenes/basura.png" alt="" style="width:25px"> Limpiar historial</button>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <div class="d-flex justify-content-between">
                        <h5>Fecha: <span class="text-secondary">00/00/00/</span></h5>
                        <h5>Hora: <span class="text-secondary">00:00</span></h5>
                        <h5>Accion: <span class="text-secondary">Creo orden de compra</span></h5>
                        <button class="btn btn-outline-info"><img src="../assets/imagenes/alerta.png" alt="" style="width:25px"> Mirar</button>
                    </div>
                    <hr class="mt-4">
                    <div class="d-flex justify-content-between">
                        <h5>Fecha: <span class="text-secondary">00/00/00/</span></h5>
                        <h5>Hora: <span class="text-secondary">00:00</span></h5>
                        <h5>Accion: <span class="text-secondary">Creo orden de compra</span></h5>
                        <button class="btn btn-outline-info"><img src="../assets/imagenes/alerta.png" alt="" style="width:25px"> Mirar</button>
                    </div>
                    <hr class="mt-4">
                    <div class="d-flex justify-content-between">
                        <h5>Fecha: <span class="text-secondary">00/00/00/</span></h5>
                        <h5>Hora: <span class="text-secondary">00:00</span></h5>
                        <h5>Accion: <span class="text-secondary">Creo orden de compra</span></h5>
                        <button class="btn btn-outline-info"><img src="../assets/imagenes/alerta.png" alt="" style="width:25px"> Mirar</button>
                    </div>
                    <hr class="mt-4">
                    <div class="d-flex justify-content-between">
                        <h5>Fecha: <span class="text-secondary">00/00/00/</span></h5>
                        <h5>Hora: <span class="text-secondary">00:00</span></h5>
                        <h5>Accion: <span class="text-secondary">Creo orden de compra</span></h5>
                        <button class="btn btn-outline-info"><img src="../assets/imagenes/alerta.png" alt="" style="width:25px"> Mirar</button>
                    </div>
                    <hr class="mt-4">
                </div>
            </div>
        </div>
        
        
        
       
    </section>
    
</body>
</html>