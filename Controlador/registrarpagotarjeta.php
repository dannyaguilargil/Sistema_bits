<?php
//registrar pagos en tarjetas de credito
include 'conexion.php';

$numero = $_POST["numero"];
$fechavencimiento = $_POST["fechavencimiento"];
$cvv = $_POST["cvv"];
$bancoaapagar = $_POST["bancoaapagar"];
$monto = $_POST["monto"];

$sql="INSERT INTO tarjetacredito VALUES ('$numero', '$fechavencimiento', '$cvv', '$bancoaapagar', '$monto')";

$resultado=$mysqli ->query($sql);

if($resultado>0){
   // header("Location:../Vista/nomina.php");
    
    //exit(); 
 
    echo 'REGISTRO AGREGADO';
}else{
    echo 'EROOR AL AGREGAR REGISTRO';
}
?>