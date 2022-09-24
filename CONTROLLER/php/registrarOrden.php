<?php
include ('config.php');

$data = json_decode($_POST['q']);
var_dump($data);

    $estadoOrd = $data[0];
    $fechaOrd = $data[1];
    $proveedor = $data[2];
    $totalCant = $data[3];
    $totalOrd = $data[4];
    $productos = $data[5];

    $consulta1 = "SELECT prov_id, prov_nom FROM proveedor WHERE prov_nom = '$proveedor'";
    $resultado1 = mysqli_query($conex,$consulta1);
    $rowProvId = mysqli_fetch_array($resultado1);

    
    /*if(mysqli_num_rows($resultado1) > 0 && mysqli_num_rows($resultado2) > 0){
        $prov_id = $rowProvId['prov_id'];

        $consulta = "INSERT INTO ordenxproveedor
                    (ord_prov_id, ord_fecha, ord_estado, ord_cant_pro, ord_total) 
                    VALUES 
                    ('$prov_id','$fechaOrd','$estadoOrd','$totalCant','$totalOrd')";

        $resultado = mysqli_query($conex,$consulta);

        if($resultado){
                        
            echo "Compra registrada exitosamente";
                        
        }else{
            echo "Ups, ha ocurrido un error";          
        }

    }else{
        $message = "El producto o proveedor ingresado no existe";
        echo $message;
    }*/

    /*foreach($productos as $producto => $datos) {
        $info1 = $datos;
        foreach($info1 as $dato => $info2) {
            $array = explode ( ',', $info2 );
            foreach ( $array as $valor ) {
                $proOrd = $valor[0];
                $cantProOrd = $valor[1];
                $totalProOrd = $valor[2];

                
            }
            echo "Producto: ".$producto."\n Cantidad: ".$cantProOrd."\n Total: ".$totalProOrd;
        }
    }*/

    

    /*$consulta2 = "SELECT pro_id, pro_referencia FROM productos WHERE pro_referencia = '$producto'";
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
    }*/