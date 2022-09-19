<?php

$iduser = $_SESSION['id_usuario'];

$sql = ("SELECT u.usu_id, u.usu_contraseña, u.usu_nombres, u.usu_apellidos, u.usu_fecha_Nacimiento, u.usu_email, 
u.usu_telefono, u.usu_edad, cu.Car_usu_id, c.car_tipo, c.car_nombre  FROM usuario as u
INNER JOIN cargoxusuario as cu
ON u.usu_id = cu.Car_usu_id 
INNER JOIN cargo as c 
ON cu.car_id = c.car_id
WHERE usu_id = '$iduser'");

$resultado = $conex->query($sql);

while($data = $resultado->fetch_array()){   
        
    $nombre = $data['usu_nombres'];
    $apellido = $data['usu_apellidos'];
    $birthDate = $data['usu_fecha_Nacimiento'];
    $age = $data['usu_edad'];
    $tel = $data['usu_telefono'];
    $email = $data['usu_email'];
    $tipoCargo = $data['car_tipo'];
    $nomCargo = $data['car_nombre'];


    $cargo = $data['car_tipo'];
    echo "
    <div>
        <h4 class='mb-4'>Contraseña: <span class'text-secondary'>************</span></h4>
        <h4 class='mb-4'>Nombre: <span class='text-secondary'>$nombre $apellido</span> </h4>
        <h4 class='mb-4'>Fecha de Nacimiento: <span class='text-secondary'>$birthDate</span> </h4>
        <h4 class='mb-4'>Edad: <span class='text-secondary'>$age</span></h4>
    </div>
    <div>
        <h4 class='mb-4'>Telefono: <span class='text-secondary'>$tel</span></h4>
        <h4 class='mb-4'>Correo electronico: <span class='text-secondary'>$email</span> </h4>
        <h4 class='mb-4'>Tipo de cargo: <span class='text-secondary'>$tipoCargo</span> </h4>
        <h4 class='mb-4'>Nombre cargo: <span class='text-secondary'>$nomCargo</span> </h4>
    </div>";  
}


mysqli_close($conex);


