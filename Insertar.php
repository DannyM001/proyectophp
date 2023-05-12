<?php
include("conexion.php");

$sql = "INSERT INTO usuarios (nombre,apellido,edad) VALUES ('Jose','Montana','15')";

$res = $conexion->query($sql);

if ($res){
    echo "Dato Agregado exitosamente";
}else{
    echo "Fallo Insercion";
}
?>