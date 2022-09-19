<?php
include ('config.php');

$data = json_decode($_POST['q']);
var_dump($data);

    $referencia = $data[0];
    $precioVen = $data[1];
    $precioCom = $data[2];
    $minCom = $data[3];
    $codigoProducto = $data[4];
    $categoria = $data[5];
    $descripcion = $data[6];

    $consulta1 = "SELECT nom_categoria, id_categoria FROM categorias WHERE nom_categoria = '$categoria'";
    $resultado1 = mysqli_query($conex,$consulta1);
    $rowProvId = mysqli_fetch_array($resultado1);
    
    if(mysqli_num_rows($resultado1) > 0){
        $catId = $rowProvId['id_categoria'];
        $catNom = $rowProvId['nom_categoria'];

        if($catNom == $categoria){

            $consulta = "INSERT INTO productos
                    (pro_id, pro_referencia, pro_precio_venta, pro_precio_compra, pro_min_compra, pro_cantidad, pro_estado, pro_descripcion, pro_categoria) 
                    VALUES 
                    ('$codigoProducto','$referencia','$precioVen','$precioCom','$minCom',0, 'AGOTADO', '$descripcion', $catId)";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                        
                echo "Producto añadido exitosamente";
                        
            }else{
    
                echo "Ups, ha ocurrido un error";          
            }
        }
    }else{
        $message = "La categoria ingresada no existe, creela si desea añadir este producto a una nueva categoria";
        echo $message;
    }