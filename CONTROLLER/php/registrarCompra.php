<?php
include ('config.php');

$data = json_decode($_POST['q']);
var_dump($data);

    $proveedor = $data[0];
    $producto = $data[1];
    $cantidad = $data[2];
    $fecha = $data[3];
    $numCom = $data[4];
    $comentario = $data[5];
    $total = $data[6];

    $consulta1 = "SELECT prov_id, prov_nom FROM proveedor WHERE prov_nom = '$proveedor'";
    $resultado1 = mysqli_query($conex,$consulta1);
    $rowProvId = mysqli_fetch_array($resultado1);
    

    $consulta2 = "SELECT pro_id, pro_referencia FROM productos WHERE pro_referencia = '$producto'";
    $resultado2 = mysqli_query($conex,$consulta2);
    $rowProId = mysqli_fetch_array($resultado2);
    
    if(mysqli_num_rows($resultado1) > 0 && mysqli_num_rows($resultado2) > 0){
        $provNom = $rowProvId['prov_nom'];
        $prov_id = $rowProvId['prov_id'];
        $proRef = $rowProId['pro_referencia'];
        $pro_id = $rowProId['pro_id'];

        if($provNom == $proveedor && $proRef == $producto){

            $consulta = "INSERT INTO compras
                    (com_numero_orden, com_pro_id, com_cant_pro, com_total, com_fecha,comentario) 
                    VALUES 
                    ('$numCom','$pro_id','$cantidad','$total','$fecha','$comentario')";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                        
                echo "Compra registrada exitosamente";
                        
            }else{
    
                echo "Ups, ha ocurrido un error";          
            }
        }
    }else{
        $message = "El producto o proveedor ingresado no existe";
        echo $message;
    }