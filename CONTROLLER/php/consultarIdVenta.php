<?php 
include ('config.php');

$consulta = "SELECT ven_cli_id, MAX(ven_id) FROM venta;";

$resultado = mysqli_query($conex,$consulta);
$rowVenId = mysqli_fetch_array($resultado);

$venId = $rowVenId['MAX(ven_id)']+1;
echo $venId;
