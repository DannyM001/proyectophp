<?php
    //recuperar datos enviados por el metodo POST
    $conexion = new mysqli("programacionweb","root", "","php");
    if($conexion){
        //echo "La conexion funciona correctamente ";
    }else{
        echo "Fallo la conexion";
    }


    ?>