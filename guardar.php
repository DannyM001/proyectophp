<?php
    
   include("conexion.php");
   $sql = "INSERT INTO usuarios (nombre, apellido, edad) VALUES ('Migue','Romero','50')";
    $res = $conexion->query($sql);
    if($res){
        echo "Insercion exitosa";
    }else{
        echo "Fallo la Insercion";
    }
    
    ?>