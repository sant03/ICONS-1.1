<?php
$inc = include('config.php');

if($inc){
    $consulta = "SELECT usu_nombres, usu_apellidos, c.car_tipo FROM usuario as u INNER JOIN cargoxusuario as cu 
    ON u.usu_id = cu.Car_usu_id 
    INNER JOIN cargo as c ON c.car_id = cu.Car_id 
    ORDER BY usu_nombres ASC";

    $resultado = mysqli_query($conex,$consulta);

    if($resultado){
        while($row = $resultado->fetch_array()){
            $nombre = $row['usu_nombres'];
            $apellido = $row['usu_apellidos'];
            $cargo = $row['car_tipo'];
            echo "
            <div class='col-lg-2 col-sm-5 card shadow text-center p-3 pb-2 me-4 mb-3'>
                <div class='card-header'>
                    <img src='../../VIEWS/assets/imagenes/user-icon.png' alt='' style='width:80px'>
                </div>
                <div class='card-body'>
                    <h6 class='mb-0 pb-0'>$nombre $apellido</h6>
                </div>
                <div class='card-footer bg-dark rounded' style='width:100%;'>
                    <p id='cargoColor' class='fw-bold mb-0 pb-0 text-white'>$cargo</p>
                </div>
            </div>";
        }
    }
}

