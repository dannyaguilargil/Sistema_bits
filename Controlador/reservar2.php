<?php

include 'conexion.php';

//
//$nombre = $_POST['nombre'];
//$codigo = $_POST['codigo'];
//$nota = $_POST['nota'];
//$id_vuelo = $_POST["id_vuelo"];
$ciudad_origen_vuelo = $_POST["ciudad_origen_vuelo"];
$ciudad_destino_vuelo = $_POST["ciudad_destino_vuelo"];
$fecha_vuelo = $_POST["fecha_vuelo"];
$puestos_maximos_vuelo = $_POST["puestos_maximos_vuelo"];

$sql="INSERT INTO vuelos (Ciudad_origen_vuelo, Ciudad_destino_vuelo, Fecha_vuelo, Puestos_maximos_vuelo) VALUES ('$ciudad_origen_vuelo', '$ciudad_destino_vuelo', '$fecha_vuelo', '$puestos_maximos_vuelo')";

$resultado=$mysqli ->query($sql);

if($resultado>0){
    
    header("Location:../Vista/pago.html");
    
    exit(); 
}else{
    echo 'EROOR AL AGREGAR REGISTRO';
}
?>