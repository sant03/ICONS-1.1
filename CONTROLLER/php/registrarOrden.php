<?php
include ('config.php');

$data1 = json_decode($_POST['q']);
var_dump($data1);

$productos = json_decode($_POST['q2']);
var_dump($productos);

    $estadoOrd = $data1[0];
    $fechaOrd = $data1[1];
    $proveedor = $data1[2];
    $totalCant = $data1[3];
    $totalOrd = $data1[4];
    $numOrd = $data1[5];

    

    $consulta1 = "SELECT prov_id, prov_nom FROM proveedor WHERE prov_nom = '$proveedor'";
    $resultado1 = mysqli_query($conex,$consulta1);
    $rowProvId = mysqli_fetch_array($resultado1);

    
    if(mysqli_num_rows($resultado1) > 0){
        $prov_id = $rowProvId['prov_id'];
        $prov_nom = $rowProvId['prov_nom'];

        if($proveedor == $prov_nom){
            $consulta = "INSERT INTO ordenxproveedor
                    (ord_numero_orden, ord_prov_id, ord_fecha, ord_estado, ord_can_pro, ord_total) 
                    VALUES 
                    ('$numOrd','$prov_id','$fechaOrd','$estadoOrd','$totalCant','$totalOrd')";
        
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                
                $validarInsersion;
                foreach($productos as $producto => $datos) {
                    $producto = $datos->producto;
                    $cantidad = $datos->cantidad;
                    $total = $datos->total;
                    
                    $consulta2 = "SELECT pro_id, pro_referencia FROM productos WHERE pro_referencia = '$producto'";
                    $resultado2 = mysqli_query($conex,$consulta2);
                    $rowProRef = mysqli_fetch_array($resultado2);

                    if(mysqli_num_rows($resultado2) > 0){
                        $pro_id = $rowProRef['pro_id'];
                        $pro_ref = $rowProRef['pro_referencia'];

                        $consulta3 = "INSERT INTO orden_compra
                        (ord_numero_orden, ord_pro_id, ord_cant_pro, ord_total_pro)
                        VALUES
                        ('$numOrd','$pro_id','$cantidad','$total')";
            
                        $resultado3 = mysqli_query($conex,$consulta3);
                        if($resultado3){
                            $validado = $validarInsersion + 1;
                        }else{
                            $validarInsersion = 0;
                        }
                    }  
                }
                if($validarInsersion = 0){
                    echo "Fallo al registrar los productos, intentelo nuevamente";
                }elseif($validado = 2){
                    echo "Nueva orden de compra registrada exitosamente";
                }
                            
            }else{
                echo "Ups, ha ocurrido un error";          
            }


        }else{
            $message = "El proveedor ingresado no existe";
            echo $message;
        }
    }

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