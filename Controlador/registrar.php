<?php

include 'conexion.php';

//
//$nombre = $_POST['nombre'];
//$codigo = $_POST['codigo'];
//$nota = $_POST['nota'];
$nombre_usuario = $_POST["nombre_usuario"];
$cedula_usuario = $_POST["cedula_usuario"];
$email_usuario = $_POST["email_usuario"];
$numero_telefono = $_POST["numero_telefono"];
$contrasena = $_POST["contrasena"];

$sql="INSERT INTO usuario VALUES ('$nombre_usuario', '$cedula_usuario', '$email_usuario', '$numero_telefono', '$contrasena')";

$resultado=$mysqli ->query($sql);

if($resultado>0){
    header("Location:../Vista/vuelos.html");
    
    exit(); 
exit(); 
   // echo 'REGISTRO AGREGADO';
}else{
    echo 'EROOR AL AGREGAR REGISTRO';
}
?>