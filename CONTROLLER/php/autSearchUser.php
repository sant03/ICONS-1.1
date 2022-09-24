<?php

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'autoSearchUser' : function autoSearchUser(){
            include('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $sql=("SELECT usu_nombres, usu_apellidos, c.car_tipo FROM usuario as u INNER JOIN cargoxusuario as cu 
            ON u.usu_id = cu.Car_usu_id 
            INNER JOIN cargo as c ON c.car_id = cu.Car_id
            WHERE u.usu_id='$q' OR u.usu_nombres LIKE '".$q."%'");
            
            $resultadoBD=$conex->query($sql);

                while($data = $resultadoBD->fetch_array()){   
                    
                    $nombre = $data['usu_nombres'];
                    $apellido = $data['usu_apellidos'];
                    $cargo = $data['car_tipo'];
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
            mysqli_close($conex);
        }
        autoSearchUser();
        break;
        case 'autoSearchUser2' : function autoSearchUser2(){
            include('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $sql=("SELECT usu_nombres, usu_apellidos FROM usuario 
            WHERE usu_id='$q' OR usu_nombres LIKE '".$q."%'");
            
            $resultadoBD=$conex->query($sql);

                while($data = $resultadoBD->fetch_array()){   
                    
                    $nombre = $data['usu_nombres'];
                    $apellido = $data['usu_apellidos'];
                        echo "<li class='search_user list-group-item' >$nombre $apellido</li>";
                }
            mysqli_close($conex);
        }
        autoSearchUser2();
        break;
    }
}


