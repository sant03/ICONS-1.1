<?php

include('config.php');

$nomCategoria = $_POST['q'];

$consulta1 = "SELECT nom_categoria FROM categorias
              WHERE  nom_categoria = '$nomCategoria'";
$resultado1 = mysqli_query($conex,$consulta1);

if(mysqli_num_rows($resultado1) > 0){
    echo "La categoria ingresada ya existe";

}else{
    $consulta = "INSERT INTO categorias
            (nom_categoria)
            VALUES
            ('$nomCategoria')";

    $resultado = mysqli_query($conex,$consulta);

    if($resultado){
        echo "Categoria creada exitosamente";
    }else{
        echo "Ups, ha ocurrido un error";
    }
}
